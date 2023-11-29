<?php
include __DIR__ . '/partials/header.php';
if(!empty($_GET['parking']) && $_GET['minVote']){
    $parking = $_GET['parking'];
    //SE METTESSI DIRETTAMENTE 1/0 NON ENTREREBBE IN QUANTO VIENE CONSIDERATO 'EMPTY'
    $parking--;
    $minVote = $_GET['minVote'];
    $tempArr = [];
    foreach($hotels as $hotel){
        if($parking === (int)$hotel['parking'] && $minVote <= $hotel['vote']){
            $tempArr[] = $hotel;
        }
    }
    $hotels = $tempArr;
}elseif(!empty($_GET['parking'])){
    $parking = $_GET['parking'];
    $parking--;
    $tempArr = [];
    foreach($hotels as $hotel){
        if($parking === (int)$hotel['parking']){
            $tempArr[] = $hotel;
        }
    }
    $hotels = $tempArr;
}elseif(isset($_GET['minVote'])){
    $minVote = $_GET['minVote'];
    $tempArr = [];
    foreach($hotels as $hotel){
        if($minVote <= $hotel['vote']){
            $tempArr[] = $hotel;
        }
    }
    $hotels = $tempArr;
}
?>
<body>
    <main class="container">
        <?php if(count($hotels) > 0){ ?>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <?php foreach($hotels[0] as $key => $hotel){
                    echo '<th scope="col">' . str_replace("_", " ", $key) . '</th>';
                } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hotels as $key => $hotel){
                    echo '<tr>';
                    echo '<th scope="row">' . $key . '</th>';
                    foreach($hotel as $key => $value){
                        if($key === 'parking'){
                            if($value){
                                echo '<td><i class="fa-solid fa-check color-green"></i></td>';
                            }else{
                                echo '<td><i class="fa-solid fa-xmark color-red"></i></td>';
                            }
                        }elseif($key === 'vote'){
                            echo '<td>';
                            for($i=1;$i<=5;$i++){
                                if($value >= $i){
                                    echo '<i class="fa-solid fa-star color-gold"></i>';
                                }else{
                                    echo '<i class="fa-regular fa-star color-gold"></i>';
                                }
                            }
                            echo '</td>';
                        }elseif($key === 'distance_to_center'){
                            echo '<td>'.$value.'km</td>';

                        }else{
                            echo '<td>'.$value.'</td>';
                        }
                    }
                    echo '</tr>';
                } ?>
            </tbody>
        </table>
        <?php }else{echo '<h5 class="text-center my-5">NESSUN ELEMENTO TROVATO</h5>';} ?>
    </main>
    <?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>