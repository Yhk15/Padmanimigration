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
          <option value="Visitor Visa">Visitor Visa</option>
          <option value="Skills Assessment">Skills Assessment</option>
          <option value="Permanent Residency">Permanent Residency</option>
          <option value="Parent Visa">Parent Visa</option>
          <option value="Employer Sponsored Visa">Employer Sponsored</option>
          <option value="Dependent Visa">Dependent Visa</option>
          <option value="Admission And Student">Admission And Student</option>
          <option value="Temporary Residency" selected>Temporary Residency</option>
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
          <hr style="border:0; border-top:1px solid #ccc; margin-bottom:20px" />

          <!-- Passport Number -->
          <div class="form-floating mb-3" style="max-width:400px">
            <input type="text" class="form-control" id="passportNo" name="passportNo" placeholder="Passport Number"
              required>
            <label for="passportNo" style="color:#0047FF">Passport Number</label>
          </div>

          <!-- Passport Holder Name -->
          <label class="form-label fw-bold mb-2 text-primary">Passport Holder Name <span
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

          <!-- Birth Details -->
          <label class="form-label fw-bold mb-2 text-primary">Birth Details <span class="text-danger">*</span></label>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth" placeholder="State, Country"
              required>
            <label for="placeOfBirth">Place of Birth</label>
          </div>

          <!-- Passport Issue Details -->
          <label class="form-label fw-bold mb-2 text-primary">Passport Issue Details</label>
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

          <!-- Address -->
          <label class="form-label fw-bold mb-2 text-primary">Address <span class="text-danger">*</span></label>
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
          </div>
        </fieldset>

        <fieldset>
          <legend>Education</legend>
          <table class="table table-bordered mb-3">
            <thead>
              <tr>
                <th>Qualification</th>
                <th>School</th>
                <th>Country</th>
                <th>Length</th>
                <th>Year</th>
                <th>Result</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody id="educationTableBody"></tbody>
          </table>
          <button type="button" class="btn btn-outline-primary" onclick="openEducationModal()">+ Add New</button>
        </fieldset>
        <fieldset>
          <legend class="mb-3" style="color:#0047FF">English Test details</legend>
          <hr style="border:0;border-top:1px solid #ccc;margin-bottom:20px">

          <div class="row">
            <div class="col-md-6 mt-2">
              <!-- IELTS -->
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="english_tests[]" id="IELTS">
                <label class="form-check-label" for="IELTS"><strong>IELTS</strong></label>
              </div>

              <!-- PTE -->
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="english_tests[]" id="PTE">
                <label class="form-check-label" for="PTE"><strong>PTE</strong></label>
              </div>

              <!-- TOEFL -->
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="english_tests[]" id="TOEFL">
                <label class="form-check-label" for="TOEFL"><strong>TOEFL</strong></label>
              </div>

              <!-- TOEIC -->
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="english_tests[]" id="TOEIC">
                <label class="form-check-label" for="TOEIC"><strong>TOEIC</strong></label>
              </div>

              <!-- Cambridge -->
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="english_tests[]" id="Cambridge">
                <label class="form-check-label" for="Cambridge"><strong>Cambridge</strong></label>
              </div>
            </div>
          </div>
        </fieldset>



        <!-- Health Insurance Question -->
        <!-- Federal Police Check Question -->
        <div class="mt-5">
          <label class="form-label d-block mb-2"><strong>have you had a AFP (Police Check)?</strong></label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="federalPoliceCheck" id="federalPoliceYes" value="yes"
              required>
            <label class="form-check-label" for="federalPoliceYes">Yes</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="federalPoliceCheck" id="federalPoliceNo" value="no">
            <label class="form-check-label" for="federalPoliceNo">No</label>
          </div>
        </div>

        <!-- Health Insurance Question -->
        <div class="mt-4">
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

        <!-- Travel History Question -->
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

        <!-- Visa Refusal Question -->
        <div class="mt-4">
          <label class="form-label d-block mb-2"><strong>Have you ever had a visa refused or cancelled?</strong></label>
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
  <div id="educationModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-4">
        <h5 class="mb-3">Education Details</h5>
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Qualification *</label>
            <input type="text" id="eduQualification" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">School *</label>
            <input type="text" id="eduSchool" class="form-control" required>
          </div>
        </div>
        <div class="row g-3 mt-3">
          <div class="col-md-4">
            <label class="form-label">Country *</label>
            <input type="text" id="eduCountry" class="form-control" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">Length *</label>
            <input type="number" id="eduLength" class="form-control" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">Year *</label>
            <input type="number" id="eduYear" class="form-control" required>
          </div>
        </div>
        <div class="row g-3 mt-3">
          <div class="col-md-6">
            <label class="form-label">Result *</label>
            <input type="text" id="eduResult" class="form-control" required>
          </div>
        </div>
        <div class="mt-4 text-end">
          <button type="button" class="btn btn-primary" onclick="saveEducation()">Save</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  let editingEducationRow = null;
  const modal = new bootstrap.Modal(document.getElementById('educationModal'));

  function openEducationModal(row = null) {
    editingEducationRow = row;
    if (row) {
      const cells = row.children;
      document.getElementById('eduQualification').value = cells[0].textContent;
      document.getElementById('eduSchool').value = cells[1].textContent;
      document.getElementById('eduCountry').value = cells[2].textContent;
      document.getElementById('eduLength').value = cells[3].textContent;
      document.getElementById('eduYear').value = cells[4].textContent;
      document.getElementById('eduResult').value = cells[5].textContent;
    } else {
      document.querySelectorAll('#educationModal input').forEach(el => el.value = '');
    }
    modal.show();
  }

  function saveEducation() {
    const qualification = document.getElementById('eduQualification').value.trim();
    const school = document.getElementById('eduSchool').value.trim();
    const country = document.getElementById('eduCountry').value.trim();
    const length = document.getElementById('eduLength').value.trim();
    const year = document.getElementById('eduYear').value.trim();
    const result = document.getElementById('eduResult').value.trim();

    if (!qualification || !school || !country || !length || !year || !result) {
      alert("Please fill all education fields.");
      return;
    }

    const rowHTML = `
      <td>${qualification}</td>
      <td>${school}</td>
      <td>${country}</td>
      <td>${length}</td>
      <td>${year}</td>
      <td>${result}</td>
      <td>
        <button class="btn btn-sm btn-warning me-2" type="button" onclick="openEducationModal(this.closest('tr'))">Edit</button>
        <button class="btn btn-sm btn-danger" type="button" onclick="this.closest('tr').remove()">Delete</button>
      </td>`;

    if (editingEducationRow) {
      editingEducationRow.innerHTML = rowHTML;
    } else {
      const newRow = document.createElement('tr');
      newRow.innerHTML = rowHTML;
      document.getElementById('educationTableBody').appendChild(newRow);
    }

    modal.hide();
  }

  // Handle entire form logic
  document.addEventListener("DOMContentLoaded", function () {
    // Visa type redirection
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
    window.handleVisaRedirect = handleVisaRedirect;

    // Show/hide more info section
    const yesOption = document.getElementById("yesOption");
    const noOption = document.getElementById("noOption");
    const moreInfoSection = document.getElementById("moreInfo");

    if (moreInfoSection) {
      moreInfoSection.style.display = "none";
      yesOption?.addEventListener("change", () => moreInfoSection.style.display = "block");
      noOption?.addEventListener("change", () => moreInfoSection.style.display = "none");
    }

    // Form submission
    const visaForm = document.getElementById("visaForm");
    if (visaForm) {
      visaForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        // Gather education rows
        const educations = [];
        document.querySelectorAll('#educationTableBody tr').forEach((row) => {
          const cells = row.querySelectorAll('td');
          if (cells.length >= 6) {
            educations.push({
              qualification: cells[0].textContent,
              school: cells[1].textContent,
              country: cells[2].textContent,
              length: cells[3].textContent,
              year: cells[4].textContent,
              result: cells[5].textContent
            });
          }
        });

        // Require at least one education if detailed info is shown
        if (moreInfoSection && moreInfoSection.style.display === "block" && educations.length === 0) {
          alert("Please add at least one education record.");
          return;
        }

        // Append education array to formData
        educations.forEach((edu, index) => {
          for (const key in edu) {
            formData.append(`education[${index}][${key}]`, edu[key]);
          }
        });
        // English Test Checkboxes
const selectedTests = [];
document.querySelectorAll('input[name="english_tests[]"]:checked').forEach(cb => {
  selectedTests.push(cb.id);  // or cb.value if you use value attributes
});
selectedTests.forEach(test => {
  formData.append("english_tests[]", test);
});


        if (confirm("Submit application?")) {
          fetch(this.action, {
            method: 'POST',
            body: formData
          })
            .then(response => {
              if (response.ok) {
                alert("✅ Successfully submitted.");
                window.location.href = "index.html";
              } else {
                alert("❌ Error submitting. Please try again.");
              }
            })
            .catch(() => {
              alert("⚠️ Submission failed. Check your internet or form data.");
            });
        }
      });
    }
  });
</script>





</body>

</html> 