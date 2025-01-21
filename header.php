<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <title>Dashboard</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
    }
   .log-heading {
        background: gray;
        color: white;
        border-radius: 5px;
        text-align: center;
        margin-bottom: 10px;
    }
    #sidebar {
      /*margin-top:70px; */
        height: 100vh;
        padding-top: 15px;
        padding-left: 35px;
        background: #43a047!important;
        color: white !important;
        position: fixed;
    }

    #content {
        padding-right: unset!important;
        padding-left: unset!important;
    }
    
    #headerr{
        position: sticky;
        background: #43a047;
    }

    a.nav-link {
    color: white;
}
  </style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" id="headerr" >
    <h2></h2>
    <div class="btn-toolbar mb-2 mb-md-0">
    <a href="logout.php"><button class="btn btn-outline-danger"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button></a>
    </div>
</div>