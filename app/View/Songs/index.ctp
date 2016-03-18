<?php
if (!$this->request->is('ajax'))
{//Page Title
$this->set('title_for_layout', 'Usamin S@telite | Songs List');
?>
<div class="row">
    <div class="col-lg-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist" id="songTabs">
            <li role="presentation" class="active"><a href="#always" aria-controls="Always" role="tab" data-toggle="tab">Regular Songs</a>
            </li>
            <li role="presentation"><a href="#limited" aria-controls="Weekday" role="tab" data-toggle="tab">Limited Songs</a></li>
            <li role="presentation"><a href="#unavailable" aria-controls="Unavailable" role="tab" data-toggle="tab">Unavailable Songs</a>
            </li>
        </ul>
    </div>
</div>
<div class="row text-center center-block songsTab">
    <div class="col-lg-12">
        <!-- Tab panes -->
        <div class="tab-content">
            <?php
            } //end stuff need if not ajax
            if ($type == 'Always'){
            ?>
            <div role="tabpanel" class="tab-pane fade in active" id="always">
                <?php }else{ ?>
                <div role="tabpanel" class="tab-pane fade" id="always">
                    <?php } ?>
                    <div class="row songsRow">
                        <?php
                        if ($type == 'Always') {
                            foreach ($songs as $song) {
                                ?>
                                <div class="col-xs-6 col-lg-3 col-xxl-2 center-block text-center">
                                    <?php echo $this->Html->image('songs/'.$song['Song']['coverArt'], array('class' => 'img-responsive cover center-block')) ?>
                                </div>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                if ($type == 'Weekday'){
                ?>
                <div role="tabpanel" class="tab-pane fade in active" id="limited">
                    <?php }else{ ?>
                    <div role="tabpanel" class="tab-pane fade" id="limited">
                        <?php } ?>
                        <div class="row" id="songsRow">
                            <?php
                            if ($type == 'Weekday') {
                                foreach ($songs as $song) {
                                    ?>
                                    <div class="col-xs-6 col-lg-3 col-xxl-2 center-block text-center">
                                        <?php echo $this->Html->image('songs/'.$song['Song']['coverArt'], array('class' => 'img-responsive cover center-block')) ?>
                                    </div>
                                <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    if ($type == 'Unavailable'){
                    ?>
                    <div role="tabpanel" class="tab-pane fade in active" id="unavailable">
                        <?php }else{ ?>
                        <div role="tabpanel" class="tab-pane fade" id="unavailable">
                            <?php } ?>
                            <div class="row" id="songsRow">
                                <?php
                                if ($type == 'Unavailable') {
                                    foreach ($songs as $song) {
                                        ?>
                                        <div class="col-xs-6 col-lg-3 col-xxl-2 center-block text-center">
                                            <?php echo $this->Html->image('songs/'.$song['Song']['coverArt'], array('class' => 'img-responsive cover center-block')) ?>
                                        </div>
                                    <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center center-block">
                <div class="row panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        Panel content
                    </div>
                </div>
            </div>
            <?php if (!$this->request->is('ajax')) { ?>
                <script>
                    $(document).ready(function () {
                        $('#songTabs').find('a').click(function (e) {
                            e.preventDefault();
                            $(this).tab('show');
                            var typeClicked = $(this).attr('aria-controls');
                            var baseUrl = [location.protocol, '//', location.host, location.pathname].join('');
                            var fullUrl = baseUrl + "?type=" + typeClicked;
                            $.get(fullUrl, function (data) {
                                $('.tab-content').html(data);
                            });
                        });
                    });
                </script>
            <?php } ?>
