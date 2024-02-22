<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- implemented sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Admin: Time Record</title>

    <style>
        .view-container{
            margin: 6em;
            display: flex;
            justify-content: space-around; 
            flex-wrap: wrap; 
            gap: 1rem;
        
        }
        .student-container,
        .employee-container,
        .deped-container {
            display: flex;
            align-items: center; 
            justify-content: center; 
            flex-direction: row; 
            flex-basis: 25%; 
            background-color: #323468;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.250);
            color: white;
            padding: 8px 16px;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .form-group{
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        .view-container i {
            font-size: 2em;
            margin-left: 0.5em;
        }
        .view-container h2{
            font-weight: 100;
        }
        .btn-view{
            padding:0.3em;
            background-color:#13c36b;
            font-size:1rem;
            font-weight:bold;
            color:white;
            border:none;
            border-radius: 15px;
            transition:opacity 150ms ease-in-out;
        }
        .btn-view:hover{
            cursor: pointer;
            opacity:75%;
        }
        @media screen and (max-width: 768px) {
            .view-container {
                margin: 2em; /* Adjust margin */
            }

            .student-container,
            .employee-container,
            .deped-container {
                flex-basis: 100%; /* Full width on smaller screens */
                margin-bottom: 1rem; /* Add bottom margin */
            }
        }
    </style>
</head>
<body>
    @include('component.admin.sidenav')

    <div class="main-content">
        <h1>Time Record</h1>
        <div class="container">
            <div class="view-container">
                <div class="student-container">
                    <i class="fas fa-user-graduate"></i>
                    <div class="form-group">
                        <h2>Students</h2>
                        <br>
                        <button onclick = "window.location.href = '/admin/Time_Record/Student'" class="btn-view">View</button>
                    </div>
                </div>
                <div class="employee-container">
                    <i class="fas fa-user"></i>
                    <div class="form-group">
                        <h2>Employees</h2>
                        <br>
                        <button onclick = "window.location.href = '/admin/Time_Record/Employee'" class="btn-view">View</button>
                    </div>
                </div>
                <div class="deped-container">
                    <i class="fas fa-school"></i>
                    <div class="form-group">
                        <h2>DepEd Form</h2>
                        <br>
                        <button onclick = "window.location.href = '/admin/Time_Record/DepEd'" class="btn-view">View</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="/JS/navevent.js"></script>

</body>
</html>