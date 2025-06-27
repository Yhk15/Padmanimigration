<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Other Inquiry Application Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Style.css" />
</head>
<body class="bg-light py-4">

  <div class="container">
    <h2 class="text-center mb-4">Padmani Migration</h2>
    <form id="visaForm" action="Submit.php" method="POST" class="bg-white p-4 rounded shadow">
      
      <!-- Visa Type Redirect -->
      <div class="form-floating mb-4">
        <select class="form-select" id="visaType" name="visaType" onchange="handleVisaRedirect(this)" required>
          <option value="" disabled selected>Select Visa Type</option>
          <option value="Visitor Visa">Visitor Visa</option>
          <option value="Skills Assessment">Skills Assessment</option>
          <option value="Permanent Residency">Permanent Residency</option>
          <option value="Parent Visa">Parent Visa</option>
          <option value="Employer Sponsored Visa">Employer Sponsored</option>
          <option value="Dependent Visa">Dependent Visa</option>
          <option value="Admission And Student">Admission And Student</option>
          <option value="Temporary Residency">Temporary Residency</option>
          <option value="Other Inquiries" selected>Other Inquiries</option>
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
            <input type="tel" class="form-control" id="phone_primary" name="phone_primary" placeholder="Phone Number" required>
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
            <label for="Country">Country</label>
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

      <div class="mt-4 mb-4">
        <label for="describeWants" class="form-label"><strong>Describe your wants</strong></label>
        <input type="text" class="form-control" id="describeWants" name="describeWants" placeholder="What do you want to achieve or request?" required>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary px-4 py-2">Submit Application</button>
      </div>
    </form>
  </div>

  <script>
      function handleVisaRedirect(selectElement) {
    const selectedValue = selectElement.value;

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

    if (selectedValue && visaRedirectMap[selectedValue]) {
      window.location.href = visaRedirectMap[selectedValue];
    }
  }


    document.getElementById('visaForm').addEventListener('submit', function (e) {
      e.preventDefault();
      if (!this.checkValidity()) {
        this.reportValidity();
        return;
      }

      if (confirm("Are you sure you want to submit? Your changes will be saved and you'll be redirected.")) {
        fetch(this.action, {
          method: 'POST',
          body: new FormData(this)
        }).then(response => {
          if (response.ok) {
            alert("Application submitted successfully!");
            window.location.href = "index.html";
          } else {
            alert("Something went wrong. Please try again.");
          }
        }).catch(error => {
          console.error("Error:", error);
          alert("Error submitting the form.");
        });
      }
    });
  </script>

</body>
</html>
