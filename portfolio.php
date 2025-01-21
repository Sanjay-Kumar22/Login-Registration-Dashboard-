<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Information Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom Styles -->
  <style>
    body {
      background-color: #e3f2fd;
      font-family: 'Arial', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 0;
    }

    .card {
      width: 100%;
      max-width: 500px;
      max-height: 90vh; /* Ensure the card doesn't overflow */
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      margin: 1rem;
      display: flex;
      flex-direction: column;
    }

    .card-header {
      background-color: #43a047;
      color: white;
      font-size: 1.5rem;
      font-weight: bold;
      text-align: center;
      padding: 1rem;
      border-radius: 8px 8px 0 0;
    }

    .form-label {
      font-weight: bold;
      color: #333;
    }

    button.btn.btn-primary {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      background: #43a047;
    }

    .card-body {
      padding: 2rem;
      overflow-y: auto; /* Make the card body scrollable */
      flex: 1; /* Make sure the body expands to take remaining space */
    }

    .form-control {
      border-radius: 8px;
      font-size: 14px;
      padding: 10px;
    }

    .mb-3 {
      margin-bottom: 1.5rem;
    }

    textarea.form-control {
      resize: none;
    }

    /* Maintain a single row layout across all screen sizes */
    .form-row {
      display: flex;
      gap: 1rem;
    }

    .form-group {
      flex: 1;
    }

    .single-row {
      display: block;
    }

    /* Responsive tweaks to make sure no form item is overflowing on small screens */
    @media (max-width: 767px) {
      .form-row {
        display: flex;
        flex-wrap: wrap; /* Allow wrapping on small screens */
      }

      .form-group {
        flex: 1 1 48%; /* Flexbox to make fields responsive */
        min-width: 200px; /* Ensure fields do not shrink too much */
      }

      .single-row {
        width: 100%;
      }
    }
  </style>
</head>
<body>

<div class="card">
  <div class="card-header">
    Job Information Form
  </div>
  <div class="card-body">
    <form action="" method="post">
      <!-- Upwork ID and Job Title in the same row -->
      <div class="form-row">
        <div class="form-group mb-3">
          <label for="upwork_id" class="form-label">Upwork ID</label>
          <input type="text" name="upwork_id" class="form-control" id="upwork_id" placeholder="Enter your Upwork ID" required>
        </div>

        <div class="form-group mb-3">
          <label for="job_title" class="form-label">Job Title</label>
          <input type="text" name="job_title" class="form-control" id="job_title" placeholder="Enter the job title" required>
        </div>
      </div>

      <!-- Thumbnail URL and Client Name in the same row -->
      <div class="form-row">
        <div class="form-group mb-3">
          <label for="thumbnail_url" class="form-label">Thumbnail URL</label>
          <input type="url" name="thumbnail_url" class="form-control" id="thumbnail_url" placeholder="Enter the URL of the thumbnail image" required>
        </div>

        <div class="form-group mb-3">
          <label for="client_name" class="form-label">Client Name</label>
          <input type="text" name="client_name" class="form-control" id="client_name" placeholder="Enter the client's name" required>
        </div>
      </div>

      <!-- Start Date and End Date in the same row -->
      <div class="form-row">
        <div class="form-group mb-3">
          <label for="start_date" class="form-label">Start Date</label>
          <input type="date" name="start_date" class="form-control" id="start_date" required>
        </div>

        <div class="form-group mb-3">
          <label for="end_date" class="form-label">End Date</label>
          <input type="date" name="end_date" class="form-control" id="end_date" required>
        </div>
      </div>

      <!-- Job Description and Review (Each on full width) -->
      <div class="single-row">
        <div class="form-group mb-3">
          <label for="job_description" class="form-label">Job Description</label>
          <textarea name="job_description" class="form-control" id="job_description" rows="4" placeholder="Provide a brief description of the job" required></textarea>
        </div>
      </div>

      <div class="single-row">
        <div class="form-group mb-3">
          <label for="review" class="form-label">Review</label>
          <textarea name="review" class="form-control" id="review" rows="4" placeholder="Provide a review of the project" required></textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
