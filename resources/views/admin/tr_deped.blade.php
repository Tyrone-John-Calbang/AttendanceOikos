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
    <title>Oikos Admin: DepEd Form</title>
    <style>
        h1 a{
            text-decoration:none;
            color:gray;
            transition:color 150ms ease-in-out;
        }
        h1 a:hover{
            color:black;
        }
        .lists{
            background-color:white;
            padding:1em;
            border-radius:5px;
        }
        .lists .view{
            display:flex;
            justify-content: space-between;
            align-items:center;
            border-bottom:2px solid #c5c5c5;
            margin-top:.5em;
        }
        .view .label-group{
            width:35%;
        } 
        .view .label-group p{
            font-size:1.2rem;
        }
        .view .dropdown i{
            margin-right:.6rem;
            cursor:pointer;
            transform:rotate(0deg);
            transition:transform 150ms ease-in-out;
        }
        .view .dropdown .animate{
            transform:rotate(90deg);
        }
        .lists .detail{
            visibility:hidden;
            position:absolute;
            display:flex;
            justify-content:space-between;
            color:white;
            padding:.5em;
            background-color:#51558f;
        }
        .lists .detail .option p{
            font-size:1.1rem;
        }
        .lists .detail .option-choice{
            display:flex;
            justify-content: space-around;    
        }
        .detail.show{
            visibility: visible;
            position:relative;
        }
    </style>
</head>
<body>
    @include('component.admin.sidenav')
    <div class="main-content">
        <h1><a href="/admin/Time_Record">Time Record > </a> DepEd SF2</h1>
        <div class="container">
            <div class="lists">
                <!--Create a drop down-->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:1</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _1" onclick="dropInfo(1)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_1" class="detail">
                    <div class="option">
                        <p>Section 1: Alpha</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Beta</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
                <!-- refer to the code above for drop down-->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:2</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _2" onclick="dropInfo(2)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_2" class="detail">
                    <div class="option">
                        <p>Section 1: Honesty</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Fidelity</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function dropInfo(id){
            let classSelector="._"+id;
            let idSelector="_"+id;
            let dropdown=document.querySelector(classSelector);
            let detailEl=document.getElementById(idSelector);
            let isExpanded=dropdown.getAttribute("aria-expanded");
            if(isExpanded==="false"){
                dropdown.setAttribute('aria-expanded','true');
                dropdown.classList.toggle('animate');
                detailEl.classList.toggle('show');
            }
            else{
                dropdown.setAttribute('aria-expanded','false');
                dropdown.classList.remove('animate');
                detailEl.classList.remove('show');
            }
        }

    </script>
    <script src="/JS/navevent.js"></script>

</body>
</html>