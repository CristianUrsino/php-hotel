<?php
include __DIR__ . '/partials/header.php';

?>
<body>
    <main>
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
                                echo '<td><i class="fa-solid fa-check"></i></td>';
                            }else{
                                echo '<td><i class="fa-solid fa-xmark"></i></td>';
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
    </main>
    <?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>