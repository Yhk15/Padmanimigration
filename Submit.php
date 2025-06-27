<?php
$conn = new mysqli("localhost", "root", "", "padmanimigration");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function clean_input($conn, $input)
{
    return mysqli_real_escape_string($conn, trim($input));
}

// Auto-generate Inquiry ID
$newInquiryId = 'I00001';
$result = $conn->query("SELECT Inquiry_Id FROM pm_inquiry ORDER BY Inquiry_Id DESC LIMIT 1");
if ($result && $row = $result->fetch_assoc()) {
    $num = intval(substr($row['Inquiry_Id'], 1)) + 1;
    $newInquiryId = 'I' . str_pad($num, 5, '0', STR_PAD_LEFT);
}

// Insert into pm_inquiry
$firstName = clean_input($conn, $_POST['surname']);
$givenName = clean_input($conn, $_POST['given_name']);
$gender = clean_input($conn, $_POST['gender']);
$email = clean_input($conn, $_POST['email']);
$phone = clean_input($conn, $_POST['phone_primary']);
$visaType = clean_input($conn, $_POST['visaType']);
$dob = clean_input($conn, $_POST['dob']);
$address = clean_input($conn, $_POST['Address']);
$country = clean_input($conn, $_POST['Country']);
$maritalStatus = clean_input($conn, $_POST['maritalStatus']);

$inquirySQL = "INSERT INTO pm_inquiry (Inquiry_ID, VisaType, FirstName, GivenName, Gender, Email, ContactNo, DOB, Address, Country, Marital_Status) 
VALUES ('$newInquiryId', '$visaType', '$firstName', '$givenName', '$gender', '$email', '$phone', '$dob', '$address', '$country', '$maritalStatus')";

if (!$conn->query($inquirySQL)) {
    die("pm_inquiry Insert Error: " . $conn->error);
}

// Check Interest
$Interested = clean_input($conn, $_POST['moreInterested']);
if (strcasecmp(trim($Interested), "Yes") == 0) {

    // Generate new Visitor ID
    $Visitor_Id = 'V00001';
    $result = $conn->query("SELECT Visitor_Id FROM pm_ref_table ORDER BY Visitor_Id DESC LIMIT 1");
    if ($result && $row = $result->fetch_assoc()) {
        $num = intval(substr($row['Visitor_Id'], 1)) + 1;
        $Visitor_Id = 'V' . str_pad($num, 5, '0', STR_PAD_LEFT);
    }

    // Insert into pm_ref_table
    $refSQL = "INSERT INTO pm_ref_table (Visitor_Id, Inquiry_ID) VALUES ('$Visitor_Id', '$newInquiryId')";
    if (!$conn->query($refSQL)) {
        die("pm_ref_table Insert Error: " . $conn->error);
    }

    // Insert into pm_passport_details
    $passportNo = clean_input($conn, $_POST['passportNo']);
    $p_surname = clean_input($conn, $_POST['surname_passport']);
    $p_given = clean_input($conn, $_POST['given_name_passport']);
    $p_birthplace = clean_input($conn, $_POST['placeOfBirth']);
    $p_issueplace = clean_input($conn, $_POST['place_of_issue']);
    $p_issuedate = clean_input($conn, $_POST['date_of_issue']);
    $p_expiry = clean_input($conn, $_POST['date_of_expiry']);
    $p_ad1 = clean_input($conn, $_POST['addressLine1']);
    $p_ad2 = clean_input($conn, $_POST['addressLine2']);
    $p_pin = clean_input($conn, $_POST['pincode']);
    $p_state = clean_input($conn, $_POST['state']);
    $p_country = clean_input($conn, $_POST['country']);

    $passportSQL = "INSERT INTO pm_passport_details VALUES (
        '$Visitor_Id', '$passportNo', '$p_surname', '$p_given', '$dob', '$gender',
        '$p_birthplace', '$p_issueplace', '$p_issuedate', '$p_expiry',
        '$p_ad1', '$p_ad2', '$p_pin', '$p_state', '$p_country')";
    if (!$conn->query($passportSQL)) {
        die("pm_passport_details Insert Error: " . $conn->error);
    }

    // Insert into pm_health_and_travelling_history
    $healthinsurance = clean_input($conn, $_POST['HealthInsurance']);
    $traveledBefore = clean_input($conn, $_POST['traveledBefore']);
    $visaRefused = clean_input($conn, $_POST['visaRefused']);

    $hatSQL = "INSERT INTO pm_health_and_travelling_history VALUES ('$Visitor_Id', '$healthinsurance', '$traveledBefore', '$visaRefused')";
    if (!$conn->query($hatSQL)) {
        die("pm_health_and_travelling_history Insert Error: " . $conn->error);
    }

    // Visa-specific inserts
    if (strcasecmp(trim($visaType), "Temporary Residency") != 0) {
        $financialSupport = clean_input($conn, $_POST['financialSupport']);

        $financeSQL = "INSERT INTO pm_finance VALUES ('$Visitor_Id', '$financialSupport')";
        if (!$conn->query($financeSQL)) {
            die("pm_finance Insert Error: " . $conn->error);
        }
    }

    if (strcasecmp(trim($visaType), "Temporary Residency") == 0 ) {
        $selectedTests = $_POST['english_tests'] ?? [];

$ielts = in_array("IELTS", $selectedTests) ? "Yes" : "No";
$pte = in_array("PTE", $selectedTests) ? "Yes" : "No";
$toefl = in_array("TOEFL", $selectedTests) ? "Yes" : "No";
$toeic = in_array("TOEIC", $selectedTests) ? "Yes" : "No";
$cambridge = in_array("Cambridge", $selectedTests) ? "Yes" : "No";

$englishSQL = "INSERT INTO pm_english_test 
(Visitor_Id, IELTS, PTE, TOEFL, TOEIC, Cambridge) 
VALUES 
('$Visitor_Id', '$ielts', '$pte', '$toefl', '$toeic', '$cambridge')";

        if (!$conn->query($englishSQL)) {
            die("pm_english_test Insert Error: " . $conn->error);
        }
    }


    if (strcasecmp(trim($visaType), "Dependent Visa") == 0) {
        $purposeReason = clean_input($conn, $_POST['purposeReason']);
        $dependentSQL = "INSERT INTO pm_dependent_visa VALUES ('$Visitor_Id', '$purposeReason')";
        if (!$conn->query($dependentSQL)) {
            die("pm_dependent_visa Insert Error: " . $conn->error);
        }
    }

    if (strcasecmp(trim($visaType), "Visitor Visa") == 0) {
        $purpose = clean_input($conn, $_POST['purposeOfVisit']);
        if ($purpose == 'Other' && isset($_POST['otherPurpose'])) {
            $purpose = clean_input($conn, $_POST['otherPurpose']);
        }
        $arrival = clean_input($conn, $_POST['arrivalDate']);
        $departure = clean_input($conn, $_POST['departureDate']);

        $visitorSQL = "INSERT INTO pm_visitor_visa (Visitor_Id, Purpose_Of_Visit, Estimated_Date_Of_Arrival, Date_Of_Departure) 
        VALUES ('$Visitor_Id', '$purpose', '$arrival', '$departure')";
        if (!$conn->query($visitorSQL)) {
            die("pm_visitor_visa Insert Error: " . $conn->error);
        }
    }


    if (strcasecmp(trim($visaType), "Temporary Residency") == 0) {

        $policecheck = clean_input($conn, $_POST['federalPoliceCheck']);
        $trSQL = "INSERT INTO pm_tr VALUES ('$Visitor_Id', '$policecheck')";
        if (!$conn->query($trSQL)) {
            die("pm_tr Insert Error: " . $conn->error);
        }
    }
    if (strcasecmp(trim($visaType), "Visitor Visa") == 0) {
        //PM_Travelling_Companion
        if (isset($_POST['companions'])) {
            $companions = json_decode($_POST['companions'], true);
            foreach ($companions as $c) {
                $relation = clean_input($conn, $c['relation']);
                $gender = clean_input($conn, $c['sex']);
                $family = clean_input($conn, $c['family']);
                $given = clean_input($conn, $c['given']);
                $dob = clean_input($conn, $c['dob']);

                $tcSQL = "INSERT INTO pm_traveling_companions (Visitor_Id, P_No, TC_Relation, TC_Gender, TC_Family_Name, TC_Given_Name, TC_DOB) VALUES ('$Visitor_Id', '$passportNo', '$relation', '$gender', '$family', '$given', '$dob')";
                if (!$conn->query($tcSQL)) {
                    die("PM_Traveling_Companions Insert Error: " . $conn->error);
                }
            }
        }
    }
    if (strcasecmp(trim($visaType), "Visitor Visa") == 0 || strcasecmp(trim($visaType), "Dependent Visa") == 0) {
        if (isset($_POST['relatives'])) {
            $relatives = json_decode($_POST['relatives'], true);
            foreach ($relatives as $r) {
                $relation = clean_input($conn, $r['relation']);
                $gender = clean_input($conn, $r['sex']);
                $family = clean_input($conn, $r['family']);
                $given = clean_input($conn, $r['given']);
                $dob = clean_input($conn, $r['dob']);
                $contact = clean_input($conn, $r['contact']);
                $ad1 = clean_input($conn, $r['address1']);
                $ad2 = clean_input($conn, $r['address2']);
                $town = clean_input($conn, $r['town']);
                $state = clean_input($conn, $r['state']);
                $postcode = clean_input($conn, $r['postcode']);
                $country = clean_input($conn, $r['country']);
                $residency = clean_input($conn, $r['residency']);

                $relativeSQL = "INSERT INTO pm_relative (Visitor_Id, P_No, VR_Relation, VR_Gender, VR_Family_Name, VR_Given_Name, VR_DOB, VR_Contact_No, VR_AD1, VR_AD2, VR_Town, VR_State, VR_Postcode, VR_Country, VR_Residency_Status) VALUES ('$Visitor_Id', '$passportNo', '$relation', '$gender', '$family', '$given', '$dob', '$contact', '$ad1', '$ad2', '$town', '$state', '$postcode', '$country', '$residency')";
                if (!$conn->query($relativeSQL)) {
                    die("pm_tr Insert Error: " . $conn->error);
                }
            }
        }
    }

    if (
        strcasecmp(trim($visaType), "Admission And Student") == 0 ||
        strcasecmp(trim($visaType), "Dependent Visa") == 0 ||
        strcasecmp(trim($visaType), "Temporary Residency") == 0
    ) {
        // Education data (sent as JSON string in $_POST['education'])

if (isset($_POST['education']) && is_array($_POST['education'])) {
    foreach ($_POST['education'] as $edu) {
        $qualification = clean_input($conn, $edu['qualification']);
        $school        = clean_input($conn, $edu['school']);
        $country       = clean_input($conn, $edu['country']);
        $duration      = clean_input($conn, $edu['length']);
        $year          = clean_input($conn, $edu['year']);
        $result        = clean_input($conn, $edu['result']);

        $EducationSQL = "INSERT INTO pm_education 
            (Visitor_Id, Qualification, School_University, Country, Cource_Duration, Completed_Year, CGPA_Percentage)
            VALUES ('$Visitor_Id', '$qualification', '$school', '$country', '$duration', '$year', '$result')";

        if (!$conn->query($EducationSQL)) {
            die("PM_Education Insert Error: " . $conn->error);
        }
    }

    echo "✅ All education records saved.";
} 

    }

}




if (strcasecmp(trim($visaType), "Other Inquiries") == 0) {
    $description = clean_input($conn, $_POST['describeWants']);
    $otherSQL = "INSERT INTO pm_other (Visitor_Id, Description) VALUES ('$Visitor_Id', '$description')";
    if (!$conn->query($otherSQL)) {
        die("pm_other Insert Error: " . $conn->error);
    }
}
if (strcasecmp(trim($visaType), "Skills Assessment") == 0) {
}

if (strcasecmp(trim($visaType), "Permanent Residency") == 0) {
}

if (strcasecmp(trim($visaType), "Parent Visa") == 0) {
}

if (strcasecmp(trim($visaType), "Employer Sponsored") == 0) {
}
?>