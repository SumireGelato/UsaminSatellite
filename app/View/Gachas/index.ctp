<?php
//Page Title
$this->set('title_for_layout', 'Usamin S@tellite | Gacha List');
if (isset($currentBoxGacha)) {
    ?>
    <div class="text-center center-block">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h2>Current Box Gacha</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php echo $this->Html->image('gacha/' . $currentBoxGacha['Gacha']['pic'], array('class' => 'img-responsive center-block')); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="jstCountdown"
                     data-countdown="<?php echo $currentBoxGacha['Gacha']['dateFinish']; ?>"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="browserTime"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-6">
                <div class="row">
                    <h3>Gacha Drops</h3>
                </div>
                <div class="row">
                    <p>Each day drops all possible non-limited SSR of that type as well as all Rares and S Rares
                        of any type:</p>

                    <p>For the Cute SSR Drops, please go <?php echo $this->Html->link('here.',
                            array('controller' => 'cards',
                                'action' => 'index', '?' => 'type=Cute&source=gacha&limited=0&sort=dateAdded&order=1&statOrder=0&rarity=SSR')); ?></p>

                    <p>For the Cool SSR Drops, please go <?php echo $this->Html->link('here.',
                            array('controller' => 'cards',
                                'action' => 'index', '?' => 'type=Cool&source=gacha&limited=0&sort=dateAdded&order=1&statOrder=0&rarity=SSR')); ?></p>

                    <p>For the Passion SSR Drops, please go <?php echo $this->Html->link('here.',
                            array('controller' => 'cards',
                                'action' => 'index', '?' => 'type=Passion&source=gacha&limited=0&sort=dateAdded&order=1&statOrder=0&rarity=SSR')); ?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="row">
                    <h3>Schedule</h3>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table text-left">
                            <?php
                            $alldays = explode('|', $currentBoxGacha['Gacha']['boxGachaDays']);
                            echo '<tr>';
                            foreach ($alldays as $day) {
                                $daytype = explode('-', $day);
                                echo '<td>' . $daytype[0] . '</td>';
                            }
                            echo '</tr>';
                            echo '<tr>';
                            foreach ($alldays as $day) {
                                $daytype = explode('-', $day);
                                echo '<td>' . $daytype[1] . '</td>';
                            }
                            echo '</tr>';
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
if (isset($currentLimitedGacha)) {
    ?>
    <div class="row text-center">
        <div class="col-sm-12 col-lg-12">
            <h2>Current Limited Platinum Gacha</h2>
        </div>
    </div>
    <div class="row text-center center-block">
    <div class="col-sm-12 col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <?php echo $this->Html->image('gacha/' . $currentLimitedGacha['Gacha']['pic'], array('class' => 'img-responsive center-block')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div id="jstCountdown"
                 data-countdown="<?php echo $currentLimitedGacha['Gacha']['dateFinish']; ?>"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div id="browserTime"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <h3>Limited Gacha Drops</h3>
            </div>
            <div class="row reward">
                <?php
                foreach ($currentLimitedGacha['Card'] as $card) {
                    if ($card['limited']) {
                        echo '<div class="cardTitle" style="display: none"><p>' . $card['eName'] . '</p></div>';
                        echo $this->Html->image('cards/' . $card['baseIconArt'], array('alt' => str_replace('"', '', $card['eName']) . '-base',
                            'class' => 'btn btn-xs rewardIcons', 'url' => array('controller' => 'cards',
                                'action' => 'view',
                                $card['card_id'])));
                    }
                }
                ?>
            </div>
            <div class="row">
                <p>Click on the icons to view more details on the cards!</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <h3>Non-Limited Gacha Drops</h3>
            </div>
            <div class="row reward">
                <?php
                foreach ($currentLimitedGacha['Card'] as $card) {
                    if (!$card['limited']) {
                        echo '<div class="cardTitle" style="display: none"><p>' . $card['eName'] . '</p></div>';
                        echo $this->Html->image('cards/' . $card['baseIconArt'], array('alt' => str_replace('"', '', $card['eName']) . '-base',
                            'class' => 'btn btn-xs rewardIcons', 'url' => array('controller' => 'cards',
                                'action' => 'view',
                                $card['card_id'])));
                    }
                }
                ?>
            </div>
            <div class="row">
                <p>Click on the icons to view more details on the cards!</p>
            </div>
        </div>
    </div>
    </div>
    </div>
<?php
}
if (isset($currentRegularGacha)) {
    ?>
    <div class="row text-center">
        <div class="col-sm-12 col-lg-12">
            <h2>Current Non-Limited Platinum Gacha</h2>
        </div>
    </div>
    <div class="row text-center center-block">
        <div class="col-sm-12 col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $this->Html->image('gacha/' . $currentRegularGacha['Gacha']['pic'], array('class' => 'img-responsive center-block')); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="jstCountdown"
                         data-countdown="<?php echo $currentRegularGacha['Gacha']['dateFinish']; ?>"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="browserTime"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h3>Gacha Drops</h3>
                    </div>
                    <div class="row reward">
                        <?php
                        foreach ($currentRegularGacha['Card'] as $card) {
                            echo '<div class="cardTitle" style="display: none"><p>' . $card['eName'] . '</p></div>';
                            echo $this->Html->image('cards/' . $card['baseIconArt'], array('alt' => str_replace('"', '', $card['eName']) . '-base',
                                'class' => 'btn btn-xs rewardIcons', 'url' => array('controller' => 'cards',
                                    'action' => 'view',
                                    $card['card_id'])));
                        }
                        ?>
                    </div>
                    <div class="row">
                        <p>Click on the icons to view more details on the cards!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>

<div class="row text-center">
    <h2>Past Limited Gacha</h2>

    <p>Looking for the non-limited gacha cards? <?php echo $this->Html->link('Click here!',
            array('controller' => 'cards', 'action' => 'index', '?' => 'source=gacha&limited=0&sort=dateAdded&order=1&statOrder=0')) ?></p>

    <p>Click on a Gacha Banner to reveal more information!</p>
</div>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="row text-center center-block">
        <?php
        $numItems = 0;
        $totalItems = 1;
        foreach ($limitedGachas as $gacha) {
            if ($this->Time->isPast($gacha['Gacha']['dateFinish'])) {
                ?>
                <div class="col-md-6" style="padding-bottom: 10px">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="padding: 0" role="tab"
                             id="heading<?php echo $totalItems; ?>">
                            <a class="collapsed" role="button" data-toggle="collapse"
                               data-parent="#accordion"
                               href="<?php echo "#collapse" . $totalItems; ?>" aria-expanded="false"
                               aria-controls="<?php echo "collapse" . $totalItems; ?>"
                               style="text-decoration: none; color: black">
                                <?php echo $this->Html->image('gacha/' . $gacha['Gacha']['pic'], array('class' => 'img-responsive center-block')); ?>
                            </a>
                        </div>
                        <div id="<?php echo "collapse" . $totalItems; ?>" class="panel-collapse collapse"
                             role="tabpanel"
                             aria-labelledby="<?php echo "heading" . $totalItems; ?>">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 style="font-weight: bold"><?php echo $gacha['Gacha']['eName']; ?>
                                            <br/>
                                            <small><?php echo $gacha['Gacha']['jName'] ?></small>
                                        </h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p><span
                                                style="font-weight: bold">Date Started: </span><br/><?php echo $gacha['Gacha']['dateStart']; ?>
                                        </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p><span
                                                style="font-weight: bold">Date Finished: </span><br/><?php echo $gacha['Gacha']['dateFinish']; ?>
                                        </p>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 style="font-weight: bold">Limited Gacha Drops</h4>
                                    </div>
                                </div>
                                <div class="row reward">
                                    <?php
                                    foreach ($gacha['Card'] as $card) {
                                        if ($card['limited']) {
                                            echo '<div class="cardTitle" style="display: none"><p>' . $card['eName'] . '</p></div>';
                                            echo $this->Html->image('cards/' . $card['baseIconArt'], array('alt' => str_replace('"', '', $card['eName']) . '-base',
                                                'class' => 'btn btn-xs rewardIcons img-responsive',
                                                'url' => array('controller' => 'cards',
                                                    'action' => 'view',
                                                    $card['card_id'])));
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="row">
                                    <p>Click on the icons to view more details on the cards!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $numItems++;
                $totalItems++;
                if ($numItems == 2) {
                    echo '</div>';
                    echo '<div class="row text-center center-block">';
                    $numItems = 0;
                }
            }
        }
        ?>
    </div>
</div>
<script>
    var countdownElement = $("#jstCountdown");
    var finalDate = countdownElement.data('countdown');
    var jst = moment.tz(finalDate, "Japan");
    var browserTime = moment();
    var browserTz = moment.tz.guess();
    var browserConverted = jst.clone().tz(browserTz).format("h:m:s A D/M/YYYY");
    var hoursDifference = (moment.parseZone(browserTime.format()).utcOffset() - moment.parseZone(jst.format()).utcOffset()) / 60;
    var browserTimeElement = $("#browserTime");
    switch (true) {
        case (hoursDifference < 0)://behind jst
            browserTimeElement.html("<p>You are " + Math.abs(hoursDifference) + " hour(s) behind Japan Standard Time, " +
            "the gacha will end at " + browserConverted + " for you.</p>");
            break;
        case (hoursDifference == 0)://is jst
            browserTimeElement.html("<p>You are on Japan Standard Time, the gacha will end at " + jst.format("h:m:s A D/M/YYYY") + " for you.</p>");
            break;
        case (hoursDifference > 0)://ahead jst
            browserTimeElement.html("<p>You are " + hoursDifference + " hour(s) ahead of Japan Standard Time, " +
            "the gacha will end at " + browserConverted + " for you.</p>");
            break;
        default://unknown
            browserTimeElement.html("<p>Unable to detect time! Sorry cannot provide converted times.</p>");
            break;
    }
    countdownElement.countdown(jst.toDate())
        .on('update.countdown', function (event) {
            $(this).html("<h3 style='margin: 0'>" + event.strftime('%-D day%!D %-H hour%!H %-M minute%!M %-S second%!S') + " left</h3>");
        })
        .on('finish.countdown', function (event) {
            $(this).html('<h3 style="margin: 0">Gacha Over!</h3>');
        });
    $(function () {
        var $reward = $('.reward');
        $reward.find('.rewardIcons').each(function () {
            var $this = $(this);
            $this.popover({
                trigger: 'hover',
                placement: 'bottom',
                html: true,
                title: $this.prev('.cardTitle').html(),
                content: $this.next('.cardInfo').html()
            });
        });
    });

</script>
