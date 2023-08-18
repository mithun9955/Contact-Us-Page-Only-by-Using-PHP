 <!DOCTYPE html>
 <html>

 <head>
     <title></title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 </head>

 <body>

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <a class="navbar-brand" href="#">Your Solutions</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item active">
                     <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Our Services
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="#">Loan</a>
                         <a class="dropdown-item" href="#">Funding</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="#">Future Scope</a>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="about.php">About Us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="contact.php">Contact Us</a>
                 </li>

             </ul>
         </div>
     </nav>


     <div id="demo" class="carousel slide" data-ride="carousel">
         <ul class="carousel-indicators">
             <li data-target="#demo" data-slide-to="0" class="active"></li>
             <li data-target="#demo" data-slide-to="1"></li>
             <li data-target="#demo" data-slide-to="2"></li>
         </ul>
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img src="img/11.jpg" alt="Los Angeles" width="1100" height="500">
                 <div class="carousel-caption">
                     <h3>Loan</h3>
                     <p>There are Different types of loan available!!</p>
                 </div>
             </div>
             <div class="carousel-item">
                 <img src="img/12.jpg" alt="Chicago" width="1100" height="500">
                 <div class="carousel-caption">
                     <h3>Funding</h3>
                     <p>All types of Funding!!</p>
                 </div>
             </div>
             <div class="carousel-item">
                 <img src="img/13.jpg" alt="New York" width="1100" height="500">
                 <div class="carousel-caption">
                     <h3>Future Scope</h3>
                     <p>Wait for Next!</p>
                 </div>
             </div>
         </div>
         <a class="carousel-control-prev" href="#demo" data-slide="prev">
             <span class="carousel-control-prev-icon"></span>
         </a>
         <a class="carousel-control-next" href="#demo" data-slide="next">
             <span class="carousel-control-next-icon"></span>
         </a>
     </div>

     <section class="my-5">
         <div class="py-5">
             <h2 class="text-center">About Us</h2>
         </div>
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-6 colo-md-6 col-12">
                     <img src="img/13.jpg" class="img-fluid aboutimg">
                 </div>
                 <div class="col-lg-6 colo-md-6 col-12">
                     <h2 class="display-4">My Page</h2>
                     <p class="py-3">Web page. A web page is a simple document displayable by a browser. Such documents
                         are written in the HTML language (which we look into in more detail in other articles). A web
                         page can embed a variety of different types of resources such as: style information —
                         controlling a page's look-and-feel.</p>
                     <a href="about.php" class="btn btn-success">Check More</a>
                 </div>
             </div>
     </section>


     <section class="my-5">
         <div class="py-5">
             <h2 class="text-center">Our Services</h2>
         </div>
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-4 colo-md-4 col-12">
                     <div class="card">
                         <img class="card-img-top" src="img/12.jpg" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">Home Loan</h4>
                             <p class="card-text">Its Better for you.</p>
                             <a href="#" class="btn btn-primary">See More</a>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 colo-md-4 col-12">
                     <div class="card">
                         <img class="card-img-top" src="img/12.jpg" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">Home Loan</h4>
                             <p class="card-text">Its Better for you.</p>
                             <a href="#" class="btn btn-primary">See More</a>
                         </div>
                     </div>
                 </div>


                 <div class="col-lg-4 colo-md-4 col-12">
                     <div class="card">
                         <img class="card-img-top" src="img/12.jpg" alt="Card image">
                         <div class="card-body">
                             <h4 class="card-title">Home Loan</h4>
                             <p class="card-text">Its Better for you.</p>
                             <a href="#" class="btn btn-primary">See More</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="my-5">
         <div class="py-5">
             <h2 class="text-center">Contact us</h2>
         </div>
         <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="email" autocomplete="off"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" autocomplete="off"  class="form-control">
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="message">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button> 
            </form>
          </div>
    </section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">@mithunkumar9955</p>
    </footer>


     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

 </body>

 </html>