<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>php_vue_dischi</title>
</head>
<body>
    <div id="app">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="SpfLogo p-2">
                            <img src="https://www.geekslab.it/wp-content/uploads/2019/03/logo-spotify.png" alt="" class="w-50">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section>
                <div class="container pt-4">
                    <div class="row text-center justify-content-between">
                        <?php 
                            include('data.php');
                                foreach($data_dischi as $dischi => $details){ ?>
                                    <div class="AlbumContainer d-flex justify-content-space-around my-4 w18">
                                            <img src="<?php echo $details['poster'];?>" alt="" class="w-100 my-3">
                                            <div class="AlbumTitle my-2">
                                                <h3 class="FSize text-white"><?php echo $details['title']; ?></h3>
                                            </div>
                                            <div class="AlbumDescription">
                                                <p><?php echo $details['author']; ?></p>
                                                <p><?php echo $details['year']; ?></p>
                                            </div>
                                    </div>
                                <?php
                                }
                            ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>

<style>
    header{
    background-color:#2E3A46;
}

.SpfLogo{
    width: 5%;
}
.w18{
        width: 18%;
}

.AlbumContainer{
        background-color: #2E3A46;
        flex-wrap: wrap;
        flex-direction: column;
}
p{
    line-height: 5px;
}
.AlbumDescription{
        color: #6b7880;
}
.AlbumTitle{
    color: #808078;
}

.FSize{
    font-size: 20px;
    font-weight: 600;
}
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    /* height: 100vh; */
    background-color: #1E2D3B;
}
</style>