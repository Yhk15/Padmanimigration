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
          <option value="Dependent Visa" selected>Dependent Visa</option>
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
    <input type="text" class="form-control" id="passportNo" name="passportNo" placeholder="Passport Number" required>
    <label for="passportNo" style="color:#0047FF">Passport Number</label>
  </div>

  <!-- Passport Holder Name -->
  <label class="form-label fw-bold mb-2 text-primary">Passport Holder Name <span class="text-danger">*</span></label>
  <div class="row g-3 mb-3">
    <div class="col-md-6">
      <div class="form-floating">
        <input type="text" class="form-control" id="surname_passport" name="surname_passport" placeholder="Family Name" required>
        <label for="surname_passport">Family Name</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-floating">
        <input type="text" class="form-control" id="given_name_passport" name="given_name_passport" placeholder="Given Name" required>
        <label for="given_name_passport">Given Name</label>
      </div>
    </div>
  </div>

  <!-- Birth Details -->
  <label class="form-label fw-bold mb-2 text-primary">Birth Details <span class="text-danger">*</span></label>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth" placeholder="State, Country" required>
    <label for="placeOfBirth">Place of Birth</label>
  </div>

  <!-- Passport Issue Details -->
  <label class="form-label fw-bold mb-2 text-primary">Passport Issue Details</label>
  <div class="row g-3 mb-3">
    <div class="col-md-4">
      <div class="form-floating">
        <input type="text" class="form-control" id="place_of_issue" name="place_of_issue" placeholder="Place of Issue" required>
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
    <input type="text" class="form-control" id="addressLine1" name="addressLine1" placeholder="Address Line 1" required>
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
          <legend class="mb-3" style="color:#0047FF">Travel Information</legend>
          <hr style="border:0;border-top:1px solid #ccc;margin-bottom:20px">
 <div class="row g-3 mb-3">
  <div class="col-md-12">
    <div class="form-floating">
      <input type="text" class="form-control" id="purposeReason" name="purposeReason" placeholder="Enter your reason" required>
      <label for="purposeReason">Why you want to go? (Reason)</label>
    </div>
  </div>
</div>
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

          <fieldset>       

          <div class="mt-5">
          <legend class="mb-3" style="color:#0047FF">Any Relative or Friend in Other Country?</legend>

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


            
          
          <!-- Health Insurance Question -->
<div class="mt-5">
  <label class="form-label d-block mb-2"><strong>Do you have Health Insurance?</strong></label>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="HealthInsurance" id="HealthInsuranceYes" value="yes" required>
    <label class="form-check-label" for="HealthInsuranceYes">Yes</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="HealthInsurance" id="HealthInsuranceNo" value="no">
    <label class="form-check-label" for="HealthInsuranceNo">No</label>
  </div>
</div>

<!-- Travel History Question -->
<div class="mt-4">
  <label class="form-label d-block mb-2"><strong>Have you travelled to any other country before?</strong></label>
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

document.addEventListener('DOMContentLoaded', function () {
  const moreInfoSection = document.getElementById('moreInfo');
  const yesRadio = document.getElementById('yesOption');
  const noRadio = document.getElementById('noOption');
  moreInfoSection.style.display = 'none';

  yesRadio?.addEventListener('change', () => {
    moreInfoSection.style.display = 'block';
    moreInfoSection.querySelectorAll('input, select, textarea').forEach(el => el.required = true);
  });

  noRadio?.addEventListener('change', () => {
    moreInfoSection.style.display = 'none';
    moreInfoSection.querySelectorAll('input, select, textarea').forEach(el => el.required = false);
  });

  // ========== Education Modal ==========
  let editingEducationRow = null;
  const eduModal = new bootstrap.Modal(document.getElementById('educationModal'));

  window.openEducationModal = function (row = null) {
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
    eduModal.show();
  }

  window.saveEducation = function () {
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
      const row = document.createElement('tr');
      row.innerHTML = rowHTML;
      document.getElementById('educationTableBody').appendChild(row);
    }

    eduModal.hide();
  }

  // ========== Relative Modal ==========
  let editingRelativeRow = null;

  document.getElementById('relativeYes')?.addEventListener('change', () => {
    document.getElementById('relativeSection').classList.remove('d-none');
  });
  document.getElementById('relativeNo')?.addEventListener('change', () => {
    document.getElementById('relativeSection').classList.add('d-none');
  });

  window.openRelativeModal = function (row = null) {
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
      document.querySelectorAll('#relativeModal input, #relativeModal select').forEach(el => el.value = '');
    }
  }

  window.closeRelativeModal = function () {
    document.getElementById('relativeModal').style.display = 'none';
  }

  window.saveRelative = function () {
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
      <td>
        <button class="btn btn-sm btn-warning me-2" onclick="openRelativeModal(this.closest('tr'))">Edit</button>
        <button class="btn btn-sm btn-danger" onclick="this.closest('tr').remove()">Delete</button>
      </td>`;

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

  // ========== Form Submit ==========
  document.getElementById("visaForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const formData = new FormData(this);

    // Validate visible required fields
    const visibleFields = [...this.querySelectorAll('input, select, textarea')]
      .filter(el => el.offsetParent !== null && el.hasAttribute('required'));
    for (const field of visibleFields) {
      if (!field.value.trim()) {
        field.focus();
        alert("Please fill all required fields.");
        return;
      }
    }

    // Relatives
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

    // Education
    const educations = [];
    document.querySelectorAll('#educationTableBody tr').forEach((row) => {
      const cells = row.querySelectorAll('td');
      educations.push({
        qualification: cells[0].textContent,
        school: cells[1].textContent,
        country: cells[2].textContent,
        length: cells[3].textContent,
        year: cells[4].textContent,
        result: cells[5].textContent
      });
    });

    if (moreInfoSection.style.display !== 'none' && educations.length === 0) {
      alert("Please add at least one education entry.");
      return;
    }

    educations.forEach((edu, index) => {
      for (const key in edu) {
        formData.append(`education[${index}][${key}]`, edu[key]);
      }
    });

    if (confirm("Submit application?")) {
      fetch(this.action, {
        method: 'POST',
        body: formData
      })
        .then(r => r.ok ? r.text() : Promise.reject())
        .then(data => {
          alert("✅ Submitted successfully.");
          window.location = "index.html";
        })
        .catch(() => alert("❌ Submission failed."));
    }
  });
});
</script>




</body>
</html>