<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Visitor Visa Application Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Style.css" />
</head>

<body class="bg-light py-4">

  <div class="container">
    <h2 class="text-center mb-4">Padmani Migration</h2>
    <form id="visaForm" action="Submit.php" method="POST" class="bg-white p-4 rounded shadow">
      <div class="form-floating mb-4">
        <select class="form-select" id="visaType" name="visaType" onchange="handleVisaRedirect(this)" required>
          <option value="" disabled selected>Select Visa Type</option>
          <option value="Visitor Visa" selected>Visitor Visa</option>
          <option value="Skills Assessment">Skills Assessment</option>
          <option value="Permanent Residency">Permanent Residency</option>
          <option value="Parent Visa">Parent Visa</option>
          <option value="Employer Sponsored Visa">Employer Sponsored</option>
          <option value="Dependent Visa">Dependent Visa</option>
          <option value="Admission And Student">Admission And Student</option>
          <option value="Temporary Residency">Temporary Residency</option>
          <option value="Other Inquiries">Other Inquiries</option>
        </select>
        <label for="visaType">Visa Type</label>
      </div>

      <legend class="mb-3" style="color:#0047FF">Personal Details</legend>
      <hr style="border:0;border-top:1px solid #ccc;margin-bottom:20px">

      <div class="row mb-3">
        <label class="form-label fw-bold" style="color:#0d6efd">Full Name <span class="text-danger">*</span></label>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" id="given_name" name="given_name" placeholder="First Name" required>
            <label for="given_name">First Name</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Last Name" required>
            <label for="surname">Last Name</label>
          </div>
        </div>
      </div>

      <div class="row align-items-end mb-3">
        <div class="col-md-4">
          <div class="form-floating">
            <input type="tel" class="form-control" id="phone_primary" name="phone_primary" placeholder="Phone Number"
              required>
            <label for="phone_primary">Phone Number</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-floating">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            <label for="email">Email</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-floating">
            <input type="date" class="form-control" id="dob" name="dob" required>
            <label for="dob">Date of Birth</label>
          </div>
        </div>
      </div>

      <div class="row align-items-end mb-3">
        <div class="col-md-4">
          <div class="form-floating">
            <select class="form-select" id="gender" name="gender" required>
              <option value="" disabled selected>Select Gender</option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
            <label for="gender">Gender</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-floating">
            <input type="text" class="form-control" id="Country" name="Country" placeholder="Country" required>
            <label for="Cou ntry">Country</label>
          </div>
        </div>
      </div>

      <div class="form-floating mb-3" style="max-width:825px">
        <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" required>
        <label for="Address">Address</label>
      </div>

      <div class="form-floating mb-3" style="max-width:400px">
        <select class="form-select" id="maritalStatus" name="maritalStatus" required>
          <option value="" disabled selected>Select your marital status</option>
          <option>Single</option>
          <option>Married</option>
          <option>Engaged</option>
          <option>Divorced</option>
          <option>Widowed</option>
          <option>Separated</option>
        </select>
        <label for="maritalStatus">Marital Status</label>
      </div>
      <div class="mb-3">
        <label class="form-label"><strong>Interested in detailed info?</strong></label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="moreInterested" id="yesOption" value="yes" required>
          <label class="form-check-label" for="yesOption">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="moreInterested" id="noOption" value="no">
          <label class="form-check-label" for="noOption">No</label>
        </div>

      </div>
      <div id="moreInfo">
        <fieldset>
          <legend class="mb-3" style="color:#0047FF">Passport Details</legend>
          <hr style="border:0;border-top:1px solid #ccc;margin-bottom:20px">
          <div class="form-floating mb-3" style="max-width:400px">
            <input type="text" class="form-control" id="passportNo" name="passportNo" placeholder="Passport Number"
              required>
            <label for="passportNo" style="color:#0047FF">Passport Number</label>
          </div>
          <label class="form-label fw-bold mb-2" style="color:#0d6efd">Passport Holder Name <span
              class="text-danger">*</span></label>
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="surname_passport" name="surname_passport"
                  placeholder="Family Name" required>
                <label for="surname_passport">Family Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="given_name_passport" name="given_name_passport"
                  placeholder="Given Name" required>
                <label for="given_name_passport">Given Name</label>
              </div>
            </div>
          </div>
          <label class="form-label fw-bold mb-2" style="color:#0d6efd">Birth Details <span
              class="text-danger">*</span></label>
          <div class="row g-3 mb-3">
            <div class="col-md-4">
              <div class="form-floating">
                <input type="date" class="form-control" id="dob" name="dob" required>
                <label for="dob">Date of Birth</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating">
                <select class="form-select" id="gender_passport" name="gender_passport" required>
                  <option value="" disabled selected>Select Gender</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>
                </select>
                <label for="gender_passport">Gender</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth"
                  placeholder="State, Country" required>
                <label for="placeOfBirth">Place of Birth</label>
              </div>
            </div>
          </div>
          <label class="form-label fw-bold mb-2" style="color:#0d6efd">Passport Issue Details</label>
          <div class="row g-3 mb-3">
            <div class="col-md-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="place_of_issue" name="place_of_issue"
                  placeholder="Place of Issue" required>
                <label for="place_of_issue">Place of Issue</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating">
                <input type="date" class="form-control" id="date_of_issue" name="date_of_issue" required>
                <label for="date_of_issue">Date of Issue</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating">
                <input type="date" class="form-control" id="date_of_expiry" name="date_of_expiry" required>
                <label for="date_of_expiry">Date of Expiry</label>
              </div>
            </div>
          </div>
          <label class="form-label fw-bold mb-2" style="color:#0d6efd">Address <span
              class="text-danger">*</span></label>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="addressLine1" name="addressLine1" placeholder="Address Line 1"
              required>
            <label for="addressLine1">Address Line 1</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="addressLine2" name="addressLine2" placeholder="Address Line 2">
            <label for="addressLine2">Address Line 2</label>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-md-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode" required>
                <label for="pincode">Pincode</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
                <label for="state">State</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                <label for="country">Country</label>
              </div>
            </div>
        </fieldset>
        <fieldset>
          <legend class="mb-3" style="color:#0047FF">Travel Information</legend>
          <hr style="border:0;border-top:1px solid #ccc;margin-bottom:20px">
          <div class="row g-3 mb-3 align-items-end">
            <div class="col-md-4">
              <div class="form-floating">
                <select class="form-select" id="purposeOfVisit" name="purposeOfVisit" onchange="toggleOtherPurpose()">
                  <option value="" disabled selected>Purpose of Visit</option>
                  <option>Business</option>
                  <option>Tourism</option>
                  <option>Family Visit</option>
                  <option>Study</option>
                  <option>Religious Event</option>
                  <option>Honeymoon</option>
                  <option>Pregnancy / Infant Care</option>
                  <option>Other</option>
                </select>
                <label for="purposeOfVisit">Purpose of Visit</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating">
                <input type="date" class="form-control" id="arrivalDate" name="arrivalDate" required>
                <label for="arrivalDate">Estimated Date of Arrival</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating">
                <input type="date" class="form-control" id="departureDate" name="departureDate" required>
                <label for="departureDate">Date of Departure</label>
              </div>
            </div>
          </div>
          <div class="row mb-3 d-none" id="otherPurposeDiv">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="otherPurpose" name="otherPurpose"
                  placeholder="Specify Purpose">
                <label for="otherPurpose">Other Purpose</label>
              </div>
            </div>
          </div>
          <fieldset>       
            <div class="mb-3">
            <label class="form-label fw-bold">Any travelling companion?</label>
            <div>
              <input type="radio" name="goingWith" value="yes" onclick="toggleVisitorSection(true)" required> Yes
              <input type="radio" name="goingWith" value="no" onclick="toggleVisitorSection(false)" class="ms-3"
                checked>
              No
            </div>
          </div>
          <div id="visitorSection" class="d-none mt-4">
            <legend class="mb-3" style="color:#0047FF">Travelling Companions</legend>
            <hr>
            <table class="table table-bordered mb-3">
              <thead>
                <tr>
                  <th>Relationship</th>
                  <th>Family Name</th>
                  <th>Given Name</th>
                  <th>Sex</th>
                  <th>DOB</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="visitorTableBody"></tbody>
            </table>
            <button type="button" class="btn btn-outline-primary" onclick="openVisitorModal()">+ Add New</button>
            <!-- Companion Modal -->
            <div id="visitorModal" class="modal">
              <div class="modal-dialog modal-lg">
                <div class="modal-content p-4">
                  <h5 class="mb-3">Companion Details</h5>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label">Relationship *</label>
                      <select id="visitorRelation" class="form-select">
                        <option value="" disabled selected>Select...</option>
                        <option>Aunt</option>
                        <option>Brother</option>
                        <option>Business Associate</option>
                        <option>Child</option>
                        <option>Cousin</option>
                        <option>Daughter/Son-in-law</option>
                        <option>Fiance/Fiancee</option>
                        <option>Friend</option>
                        <option>Grand Child</option>
                        <option>Grand Parent</option>
                        <option>Mother/Father-in-law</option>
                        <option>Nephew</option>
                        <option>Niece</option>
                        <option>Parent</option>
                        <option>Sister</option>
                        <option>Sister/Brother-in-law</option>
                        <option>Spouse/De Facto Partner</option>
                        <option>Step Child</option>
                        <option>Step Parent</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Sex *</label>
                      <select id="visitorSex" class="form-select">
                        <option value="" disabled selected>Select...</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="row g-3 mt-3">
                    <div class="col-md-6">
                      <label class="form-label">Family Name *</label>
                      <input type="text" id="visitorFamilyName" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Given Name *</label>
                      <input type="text" id="visitorGivenName" class="form-control">
                    </div>
                  </div>
                  <div class="row g-3 mt-3">
                    <div class="col-md-6">
                      <label class="form-label">Date of Birth *</label>
                      <input type="date" id="visitorDOB" class="form-control">
                    </div>
                  </div>
                  <div class="mt-4 text-end">
                    <button type="button" class="btn btn-primary" onclick="saveVisitor()">Save</button>
                    <button type="button" class="btn btn-secondary" onclick="closeVisitorModal()">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-5">
            <label class="form-label d-block mb-2"><strong>Relative / Friend or Contact in Other
                Country?</strong></label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="hasRelative" id="relativeYes" value="yes" required>
              <label class="form-check-label" for="relativeYes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="hasRelative" id="relativeNo" value="no" checked>
              <label class="form-check-label" for="relativeNo">No</label>
            </div>
          </div>

          <div id="relativeSection" class="d-none mt-4">
            <legend class="mb-3" style="color:#0047FF">Relative / Friend or Contact Details</legend>
            <hr>
            <table class="table table-bordered mb-3">
              <thead>
                <tr>
                  <th>Relationship</th>
                  <th>Family Name</th>
                  <th>Given Name</th>
                  <th>Sex</th>
                  <th>DOB</th>
                  <th>Contact No.</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="relativeTableBody"></tbody>
            </table>
            <button type="button" class="btn btn-outline-primary" onclick="openRelativeModal()">+ Add New</button>
          </div>

          <!-- Relative Modal -->
          <div id="relativeModal" class="modal"
            style="display:none; position:fixed; top:10%; left:0; right:0; margin:auto; z-index:1050; background:#fff; border:1px solid #ccc; max-width:900px; padding:30px;">
            <h5 class="mb-3">Relative / Contact Details</h5>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Relationship *</label>
                <select id="relRelation" class="form-select">
                  <option value="" disabled selected>Select...</option>
                  <option>Aunt</option>
                  <option>Brother</option>
                  <option>Business Associate</option>
                  <option>Child</option>
                  <option>Cousin</option>
                  <option>Daughter/Son-in-law</option>
                  <option>Fiance/Fiancee</option>
                  <option>Friend</option>
                  <option>Grand Child</option>
                  <option>Grand Parent</option>
                  <option>Mother/Father-in-law</option>
                  <option>Nephew</option>
                  <option>Niece</option>
                  <option>Parent</option>
                  <option>Sister</option>
                  <option>Sister/Brother-in-law</option>
                  <option>Spouse/De Facto Partner</option>
                  <option>Step Child</option>
                  <option>Step Parent</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Sex *</label>
                <select id="relSex" class="form-select">
                  <option value="" disabled selected>Select...</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Family Name *</label>
                <input type="text" id="relFamilyName" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Given Name *</label>
                <input type="text" id="relGivenName" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Date of Birth *</label>
                <input type="date" id="relDOB" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Contact Number *</label>
                <input type="text" id="relContact" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Address Line 1 *</label>
                <input type="text" id="relAddr1" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Address Line 2</label>
                <input type="text" id="relAddr2" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Town/Suburb *</label>
                <input type="text" id="relTown" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">State/Territory *</label>
                <input type="text" id="relState" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Postcode *</label>
                <input type="text" id="relPostcode" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Country *</label>
                <input type="text" id="relCountry" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Residency Status *</label>
                <select id="relResidency" class="form-select">
                  <option value="" disabled selected>Select...</option>
                  <option>Australian Citizen</option>
                  <option>Australian Permanent Resident</option>
                  <option>Australian Temporary Resident (Student)</option>
                  <option>Australian Temporary Resident (Visitor)</option>
                  <option>Australian Temporary Resident (Work visa)</option>
                  <option>Other</option>
                  <option>Unknown</option>
                </select>
              </div>
            </div>
            <div class="mt-4 text-end">
              <button type="button" class="btn btn-primary" onclick="saveRelative()">Save</button>
              <button type="button" class="btn btn-secondary" onclick="closeRelativeModal()">Cancel</button>
            </div>
          </div>
        </fieldset>   
          <fieldset class="mt-4">
            <legend class="mb-3" style="color:#0047FF">Financial Support</legend>
            <hr style="border:0; border-top:1px solid #ccc; margin-bottom:20px">

            <div class="form-floating" style="max-width:400px">
              <select class="form-select" id="financialSupport" name="financialSupport" required>
                <option value="" disabled selected>Select...</option>
                <option>Self</option>
                <option>Aunt</option>
                <option>Brother</option>
                <option>Business Associate</option>
                <option>Child</option>
                <option>Cousin</option>
                <option>Daughter/Son-in-law</option>
                <option>Fiance/Fiancee</option>
                <option>Friend</option>
                <option>Grand Child</option>
                <option>Grand Parent</option>
                <option>Mother/Father-in-law</option>
                <option>Nephew</option>
                <option>Niece</option>
                <option>Parent</option>
                <option>Sister</option>
                <option>Sister/Brother-in-law</option>
                <option>Spouse/De Facto Partner</option>
                <option>Step Child</option>
                <option>Step Parent</option>
                <option>Other Organization</option>
              </select>
              <label for="financialSupport">Who will provide Financial Support?</label>
            </div>
          </fieldset>
          <div class="mt-5">
            <label class="form-label d-block mb-2"><strong>Do you have Health Insurance?</strong></label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="HealthInsurance" id="HealthInsuranceYes" value="yes"
                required>
              <label class="form-check-label" for="HealthInsuranceYes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="HealthInsurance" id="HealthInsuranceNo" value="no">
              <label class="form-check-label" for="HealthInsuranceNo">No</label>
            </div>
          </div>
          <div class="mt-4">
            <label class="form-label d-block mb-2"><strong>Have you travelled to any other country
                before?</strong></label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="traveledBefore" id="traveledYes" value="yes" required>
              <label class="form-check-label" for="traveledYes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="traveledBefore" id="traveledNo" value="no">
              <label class="form-check-label" for="traveledNo">No</label>
            </div>
          </div>
          <div class="mt-4">
            <label class="form-label d-block mb-2"><strong>Have you ever had a visa refused or
                cancelled?</strong></label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="visaRefused" id="visaRefusedYes" value="yes" required>
              <label class="form-check-label" for="visaRefusedYes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="visaRefused" id="visaRefusedNo" value="no">
              <label class="form-check-label" for="visaRefusedNo">No</label>
            </div>
          </div>

        </fieldset>
      </div>
      <button type="submit" class="btn btn-primary w-100 mt-4">Submit Application</button>
    </form>
  </div>
<script>// ✅ Combined Script for Handling Visa Redirects and Visitor Form Submission

function handleVisaRedirect(selectElement) {
  const visaRedirectMap = {
    "Visitor Visa": "VisitorVisa.php",
    "Skills Assessment": "SkillsAssessment.php",
    "Permanent Residency": "PermanentResidency.php",
    "Parent Visa": "ParentVisa.php",
    "Employer Sponsored Visa": "EmployerSponsoredVisa.php",
    "Dependent Visa": "DependentVisaOrPartnerVisa.php",
    "Admission And Student": "AdmissionAndStudent.php",
    "Temporary Residency": "TRGraduateVisa.php",
    "Other Inquiries": "OtherInquiries.php"
  };
  const selectedValue = selectElement.value;
  if (selectedValue && visaRedirectMap[selectedValue]) {
    window.location.href = visaRedirectMap[selectedValue];
  }
}

document.addEventListener('DOMContentLoaded', function () {
  const moreInfo = document.getElementById('moreInfo');
  const relativeSection = document.getElementById('relativeSection');
  const visitorSection = document.getElementById('visitorSection');

  moreInfo.style.display = 'none';
  document.getElementById('yesOption')?.addEventListener('change', () => {
    moreInfo.style.display = 'block';
  });
  document.getElementById('noOption')?.addEventListener('change', () => {
    moreInfo.style.display = 'none';
  });

  document.getElementById('relativeYes').addEventListener('change', () => {
    relativeSection.classList.remove('d-none');
  });
  document.getElementById('relativeNo').addEventListener('change', () => {
    relativeSection.classList.add('d-none');
  });

  document.getElementById('visaForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const visibleFields = [...this.querySelectorAll('input, select, textarea')]
      .filter(el => el.offsetParent !== null && el.hasAttribute('required'));

    for (const field of visibleFields) {
      if (!field.value.trim()) {
        field.focus();
        alert("Please fill all required fields.");
        return;
      }
    }

    const formData = new FormData(this);

    const companions = [];
    document.querySelectorAll('#visitorTableBody tr').forEach(row => {
      const cells = row.querySelectorAll('td');
      companions.push({
        relation: cells[0].textContent,
        family: cells[1].textContent,
        given: cells[2].textContent,
        sex: cells[3].textContent,
        dob: cells[4].textContent
      });
    });
    formData.append("companions", JSON.stringify(companions));

    const relatives = [];
    document.querySelectorAll('#relativeTableBody tr').forEach(row => {
      const cells = row.querySelectorAll('td');
      relatives.push({
        relation: cells[0].textContent,
        family: cells[1].textContent,
        given: cells[2].textContent,
        sex: cells[3].textContent,
        dob: cells[4].textContent,
        contact: cells[5].textContent,
        address1: row.dataset.ad1 || "",
        address2: row.dataset.ad2 || "",
        town: row.dataset.town || "",
        state: row.dataset.state || "",
        postcode: row.dataset.post || "",
        country: row.dataset.country || "",
        residency: row.dataset.residency || ""
      });
    });
    formData.append("relatives", JSON.stringify(relatives));

    if (confirm("Submit application?")) {
      fetch(this.action, {
        method: 'POST',
        body: formData
      }).then(r => {
        if (r.ok) {
          alert("Successfully submitted.");
          window.location = "index.html";
        } else {
          alert("Error submitting.");
        }
      }).catch(() => alert("Submission error."));
    }
  });

  toggleOtherPurpose();
});

function toggleOtherPurpose() {
  const purpose = document.getElementById('purposeOfVisit')?.value;
  const otherDiv = document.getElementById('otherPurposeDiv');
  const otherInput = document.getElementById('otherPurpose');

  const isOther = purpose === 'Other';
  if (otherDiv && otherInput) {
    otherDiv.classList.toggle('d-none', !isOther);
    if (isOther) {
      otherInput.setAttribute('required', 'required');
    } else {
      otherInput.removeAttribute('required');
      otherInput.value = '';
    }
  }
}

let editingRow = null;
function toggleVisitorSection(show) {
  document.getElementById('visitorSection').classList.toggle('d-none', !show);
}

function openVisitorModal(edit = false, row = null) {
  document.getElementById('visitorModal').classList.add('show');
  if (edit && row) {
    editingRow = row;
    const c = row.children;
    document.getElementById('visitorRelation').value = c[0].textContent;
    document.getElementById('visitorFamilyName').value = c[1].textContent;
    document.getElementById('visitorGivenName').value = c[2].textContent;
    document.getElementById('visitorSex').value = c[3].textContent;
    document.getElementById('visitorDOB').value = c[4].textContent;
  } else {
    editingRow = null;
    ['visitorRelation', 'visitorFamilyName', 'visitorGivenName', 'visitorSex', 'visitorDOB']
      .forEach(id => document.getElementById(id).value = '');
  }
}

function closeVisitorModal() {
  document.getElementById('visitorModal').classList.remove('show');
}

function saveVisitor() {
  const rel = document.getElementById('visitorRelation').value;
  const fam = document.getElementById('visitorFamilyName').value;
  const giv = document.getElementById('visitorGivenName').value;
  const sex = document.getElementById('visitorSex').value;
  const dob = document.getElementById('visitorDOB').value;

  if (!rel || !fam || !giv || !sex || !dob) {
    alert("Fill all companion fields!");
    return;
  }

  const rowHTML = `<td>${rel}</td><td>${fam}</td><td>${giv}</td><td>${sex}</td><td>${dob}</td>
    <td><button class="btn btn-sm btn-outline-primary" onclick="openVisitorModal(true,this.closest('tr'))">Edit</button>
    <button class="btn btn-sm btn-outline-danger" onclick="this.closest('tr').remove()">Delete</button></td>`;

  if (editingRow) {
    editingRow.innerHTML = rowHTML;
  } else {
    const row = document.createElement('tr');
    row.innerHTML = rowHTML;
    document.getElementById('visitorTableBody').appendChild(row);
  }
  closeVisitorModal();
}

let editingRelativeRow = null;
function openRelativeModal(row = null) {
  document.getElementById('relativeModal').style.display = 'block';
  editingRelativeRow = row;

  if (row) {
    const cells = row.children;
    document.getElementById('relRelation').value = cells[0].textContent;
    document.getElementById('relFamilyName').value = cells[1].textContent;
    document.getElementById('relGivenName').value = cells[2].textContent;
    document.getElementById('relSex').value = cells[3].textContent;
    document.getElementById('relDOB').value = cells[4].textContent;
    document.getElementById('relContact').value = cells[5].textContent;

    document.getElementById('relAddr1').value = row.dataset.ad1 || '';
    document.getElementById('relAddr2').value = row.dataset.ad2 || '';
    document.getElementById('relTown').value = row.dataset.town || '';
    document.getElementById('relState').value = row.dataset.state || '';
    document.getElementById('relPostcode').value = row.dataset.post || '';
    document.getElementById('relCountry').value = row.dataset.country || '';
    document.getElementById('relResidency').value = row.dataset.residency || '';
  } else {
    document.querySelectorAll('#relativeModal input, #relativeModal select')
      .forEach(el => el.value = '');
  }
}

function closeRelativeModal() {
  document.getElementById('relativeModal').style.display = 'none';
}

function saveRelative() {
  const relation = document.getElementById('relRelation').value.trim();
  const fName = document.getElementById('relFamilyName').value.trim();
  const gName = document.getElementById('relGivenName').value.trim();
  const sex = document.getElementById('relSex').value;
  const dob = document.getElementById('relDOB').value;
  const contact = document.getElementById('relContact').value;
  const ad1 = document.getElementById('relAddr1').value.trim();
  const ad2 = document.getElementById('relAddr2').value.trim();
  const town = document.getElementById('relTown').value.trim();
  const state = document.getElementById('relState').value.trim();
  const postcode = document.getElementById('relPostcode').value.trim();
  const country = document.getElementById('relCountry').value.trim();
  const residency = document.getElementById('relResidency').value.trim();

  if (!relation || !fName || !gName || !sex || !dob || !contact) {
    alert("Please fill all required fields.");
    return;
  }

  const rowHTML = `
    <td>${relation}</td>
    <td>${fName}</td>
    <td>${gName}</td>
    <td>${sex}</td>
    <td>${dob}</td>
    <td>${contact}</td>
    <td><button class="btn btn-sm btn-warning me-2" onclick="openRelativeModal(this.closest('tr'))">Edit</button>
    <button class="btn btn-sm btn-danger" onclick="this.closest('tr').remove()">Delete</button></td>`;

  let row;
  if (editingRelativeRow) {
    editingRelativeRow.innerHTML = rowHTML;
    row = editingRelativeRow;
  } else {
    row = document.createElement('tr');
    row.innerHTML = rowHTML;
    document.getElementById('relativeTableBody').appendChild(row);
  }

  row.dataset.ad1 = ad1;
  row.dataset.ad2 = ad2;
  row.dataset.town = town;
  row.dataset.state = state;
  row.dataset.post = postcode;
  row.dataset.country = country;
  row.dataset.residency = residency;

  closeRelativeModal();
}
</script>
</body>

</html>