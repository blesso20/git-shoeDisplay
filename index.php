<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Display Assignment</title>
     <!-- a fontawesome cnd link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Latest compiled and minified CSS -->
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- css style link -->
<link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="frame">
            <h1>Shoe Display Form <i class="fa-solid fa-user"></i></h1>
                <form action="shoe.php"  mathod="POST">
                    <div class="form-group">
                        <label for="name">Shoe Name</label>
                        <input type="text" id="name" name="name"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="shoe">Shoe Image URL</label>
                        <input type="url" id="shoe" name="shoe" value="https://www.konga.com/product/shoes-for-men-with-plush-waterproof-5854999"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="color">Shoe Color</label>
                        <select  id="color" name="color" class="form-control" required>
                         <option value="">-select-</option>
                         <option value="white">white</option>
                         <option value="Green">Black</option>
                         <option value="Blue">Blue</option>
                         <option value=" hotpink"> hotpink</option>
                         <option value="pink">pink</option>
                         <option value="yellow">yellow</option>
                         <option value="orange">orange</option>
                         <option value="green">green</option>
                         <option value="baby pink">baby pink</option>
                         <option value="black & white">black & white</option>
                         <option value="red">red</option>
                         <option value="lemon-green">lemon-green</option>
                         <option value="cream">cream</option>
                         <option value="brown">brown</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="size">Shoe Size</label>
                        <select id="size" name="size" class="form-control" required>
                            <option value="">-select-</option>
                           <option value="38">38</option>
                           <option value="39">39</option>
                           <option value="40">40</option>
                           <option value="41">41</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brand">Shoe Brand</label>
                        <select name="brand" id="brand" class="form-control" required>
                         <option value="">-select-</option>
                         <option value="Jimmy Choo">Jimmy Choo</option>
                         <option value="Vans">Vans</option>
                         <option value="Valentino">Valentino</option>
                         <option value="Converse">Converse</option>
                         <option value="Timberland">Timberland</option>
                         <option value="Aquazzura">Aquazzura</option>
                         <option value="Kate Spade">Kate Spade</option>
                         <option value="Skechers">Skechers</option>
                         <option value="Keen">Keen</option>
                         <option value="Teva">Teva</option>
                         <option value="Sergio Rossi">Sergio Rossi</option>
                         <option value="K-Swiss">K-Swiss</option>
                         <option value="Gucci">Gucci</option>
                         <option value="Mizuno">Mizuno</option>
                         <option value="Sperry">Sperry</option>
                         <option value="Saucony">Saucony</option>
                         <option value="All star">All star</option>
                         <option value="ALDO">ALDO</option>
                         <option value=" Merrell"> Merrell</option>
                         <option value="Casadei">Casadei</option>
                         <option value="Vans">Vans</option>
                         <option value="Puma">Puma</option>
                         <option value="Miu Miu">Miu Miu</option>
                    
                        </select>
                        
                    </div>
                    <div class="btn">
                        <input type="submit" class="btn btn-info">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    </main>
</body>
</html>