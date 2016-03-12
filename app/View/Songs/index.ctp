<?php foreach($songs as $song) {
    echo $this->Html->image('songs/'.$song['Song']['coverArt']);
}
?>