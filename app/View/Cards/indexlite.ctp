<?php
if (!$this->request->is('ajax')) {//Page Title//Page Title
    $this->set('title_for_layout', 'Usamin S@tellite | Cards Gallery Lite');
    ?>
    <!--Search and filter bar-->
    <div class="row text-center">
        <div class="col-lg-12">
            <p style="text-decoration: underline">Card Filters and Sorting Tools:</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center center-block" id="filterSortButtons">
                <!-- Filter/Sort Buttons -->
                <button class="btn btn-default filter" type="button" data-toggle="collapse" data-target="#filter"
                        aria-expanded="false" aria-controls="filter">
                    Filter
                </button>
                <button class="btn btn-default sort" type="button" data-toggle="collapse" data-target="#sort"
                        aria-expanded="false" aria-controls="sort">
                    Sort
                </button>
            </div>

            <!-- Collapse panes -->
            <!--Filter Bar-->
            <div class="collapse" id="filter">
                <?php
                echo $this->Form->create('Card', array(
                    'inputDefaults' => array(
                        'div' => 'form-group',
                        'label' => false,
                        'wrapInput' => false,
                        'class' => 'form-control'
                    ),
                    'class' => 'container-fluid well well-sm form-inline',
                    'novalidate' => true
                ));
                echo '<span class="glyphicon glyphicon-search"></span>';
                echo '<p style="display: inline">  Filter</p>';
                //                  Type
                $options = array(
                    1 => array('name' => 'Cute', 'value' => 'Cute'),
                    2 => array('name' => 'Cool', 'value' => 'Cool'),
                    3 => array('name' => 'Passion', 'value' => 'Passion'));

                echo $this->Form->input('type', array(
                    'options' => $options,
                    'empty' => 'All Types'
                ));
                //                  Rarity
                $options = array(
                    1 => array('name' => 'SS Rare', 'value' => 'SSR'),
                    2 => array('name' => 'S Rare', 'value' => 'SR'),
                    3 => array('name' => 'Rare', 'value' => 'R'),
                    4 => array('name' => 'Normal', 'value' => 'N'));

                echo $this->Form->input('rarity', array(
                    'options' => $options,
                    'empty' => 'All Rarities'
                ));
                //                  Skill
                $options = array(
                    1 => array('name' => 'Perfect Lock (All Variants)', 'value' => 'Perfect Lock'),
                    2 => array('name' => 'Combo Lock', 'value' => 'Combo Lock'),
                    3 => array('name' => 'Healer', 'value' => 'Healer'),
                    4 => array('name' => 'Damage Guard', 'value' => 'Damage Guard'),
                    5 => array('name' => 'Combo Bonus', 'value' => 'Combo Bonus'),
                    6 => array('name' => 'Score Bonus', 'value' => 'Score Boost'),
                    7 => array('name' => 'Overload', 'value' => 'Overload'),
                    8 => array('name' => 'No Skill', 'value' => 'No Skill'));

                echo $this->Form->input('skill', array(
                    'options' => $options,
                    'empty' => 'All Skills'
                ));
                //                  Source
                echo $this->Form->input('source', array(
                    'options' => $sourceList,
                    'empty' => 'All Sources'
                ));
                //                  Limited
                $options = array(
                    1 => array('name' => 'No Limited Cards', 'value' => '0'),
                    2 => array('name' => 'Limited Cards Only', 'value' => '1'));

                echo $this->Form->input('limited', array(
                    'options' => $options,
                    'empty' => 'Limited and Standard Cards'
                ));
                echo '<button type="button" id="filterSort" class="btn btn-passion" data-toggle="button"
                        aria-pressed="false" autocomplete="off">Show Sorting Options</button>';
                echo $this->Form->submit('Go', array(
                    'div' => 'form-group',
                    'class' => 'btn btn-passion',
                ));
                echo '<button type="button" id="resetForm" class="btn btn-passion" role="button">Reset Filters</button>';
                //                    Filter Sort Bar
                echo '<div id="filterSortForm" style="margin-top: 5px">';
                echo '<span class="glyphicon glyphicon-sort"></span>';
                echo '<p style="display: inline">  Sort</p>';
                echo $this->Form->input('sort', array(
                    'options' => array(
                        'dateAdded' => 'Release Date', 'rarity' => 'Rarity',
                        'type' => 'Type', 'idol_id' => 'Idol'),
                    'selected' => 'Release Date'
                ));
                echo $this->Form->input('order', array(
                    'class' => false,
                    'label' => 'Reverse order',
                    'type' => 'checkbox',
                    'checked' => true
                ));
                echo $this->Form->input('statSort', array(
                    'options' => array(
                        'baseVocal' => 'Vocal - Base Lvl 1', 'baseMaxVocal' => 'Vocal - Base Max Lvl',
                        'awkBaseVocal' => 'Vocal - Awakened Lvl 1', 'awkMaxVocal' => 'Vocal - Awakened Max Lvl',
                        'baseDance' => 'Dance - Base Lvl 1', 'baseMaxDance' => 'Dance - Base Max Lvl',
                        'awkBaseDance' => 'Dance - Awakened Lvl 1', 'awkMaxDance' => 'Dance - Awakened Max Lvl',
                        'baseVisual' => 'Visual - Base Lvl 1', 'baseMaxVisual' => 'Visual - Base Max Lvl',
                        'awkBaseVisual' => 'Visual - Awakened Lvl 1', 'awkMaxVisual' => 'Visual - Awakened Max Lvl',
                        'baseTotal' => 'Total - Base Lvl 1', 'baseMaxTotal' => 'Total - Base Max Lvl',
                        'awkBaseTotal' => 'Total - Awakened Lvl 1', 'awkMaxTotal' => 'Total - Awakened Max Lvl'),
                    'empty' => 'Card Statistics Sorting (Optional)'
                ));
                echo $this->Form->input('statOrder', array(
                    'class' => false,
                    'label' => 'Reverse order',
                    'type' => 'checkbox'
                ));
                echo $this->Form->end();
                echo '</div>';
                ?>
            </div>

            <!--Sort Bar-->
            <div class="collapse" id="sort">
                <?php
                echo $this->Form->create('Card', array(
                    'inputDefaults' => array(
                        'div' => 'form-group',
                        'label' => false,
                        'wrapInput' => false,
                        'class' => 'form-control'
                    ),
                    'class' => 'container-fluid well well-sm form-inline',
                    'novalidate' => true
                ));
                echo '<span class="glyphicon glyphicon-sort"></span>';
                echo '<p style="display: inline">  Sort Cards</p>';
                echo $this->Form->input('sort', array(
                    'options' => array(
                        'dateAdded' => 'Release Date', 'rarity' => 'Rarity',
                        'type' => 'Type', 'idol_id' => 'Idol'),
                    'selected' => 'Release Date'
                ));
                echo $this->Form->input('order', array(
                    'class' => false,
                    'label' => 'Reverse order',
                    'type' => 'checkbox',
                    'checked' => true
                ));
                echo $this->Form->input('statSort', array(
                    'options' => array(
                        'baseVocal' => 'Vocal - Base Lvl 1', 'baseMaxVocal' => 'Vocal - Base Max Lvl',
                        'awkBaseVocal' => 'Vocal - Awakened Lvl 1', 'awkMaxVocal' => 'Vocal - Awakened Max Lvl',
                        'baseDance' => 'Dance - Base Lvl 1', 'baseMaxDance' => 'Dance - Base Max Lvl',
                        'awkBaseDance' => 'Dance - Awakened Lvl 1', 'awkMaxDance' => 'Dance - Awakened Max Lvl',
                        'baseVisual' => 'Visual - Base Lvl 1', 'baseMaxVisual' => 'Visual - Base Max Lvl',
                        'awkBaseVisual' => 'Visual - Awakened Lvl 1', 'awkMaxVisual' => 'Visual - Awakened Max Lvl',
                        'baseTotal' => 'Total - Base Lvl 1', 'baseMaxTotal' => 'Total - Base Max Lvl',
                        'awkBaseTotal' => 'Total - Awakened Lvl 1', 'awkMaxTotal' => 'Total - Awakened Max Lvl'),
                    'empty' => 'Card Statistics Sorting (Optional)'
                ));
                echo $this->Form->input('statOrder', array(
                    'class' => false,
                    'label' => 'Reverse order',
                    'type' => 'checkbox'
                ));
                echo $this->Form->submit('Sort', array(
                    'div' => 'form-group',
                    'class' => 'btn btn-passion'
                ));
                echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
    <div class="row text-center"><p>Click on a Card to reveal more information about the card!</p></div>
<div class="icons">
<?php
} // End Stuff you don't need if ajax request
?>
<div class="row">
    <div class="col-xs-12 center-block text-center">
        <?php
        if (empty($cards)) {
            echo '<h4 class="text-center">No results! Try to broaden your filter(s)!</h4>';
        }
        foreach ($cards as $card) {
            echo $this->Html->image('cards/' . $card['Card']['baseIconArt'], array(
                'class' => 'icon',
                'url' => array('controller' => 'cards',
                    'action' => 'view',
                    $card['Card']['card_id'])));
        } ?>
    </div>
</div>
        <?php
        if ($this->Paginator->counter('{:pages}') > 1) {
            echo $this->Paginator->next('Load More ...', array('class' => 'next text-center center-block'));
        }
        ?>
<?php if (!$this->request->is('ajax')) { ?>
    </div>
    <script>
        //Hide sort bar when filter bar is clicked
        $(document).ready(function () {
            $('.filter').click(function () {
                $(this).button('toggle');
                $('#sort').collapse('hide');
                $('#filter').collapse('show');
            });
        });

        //Hide filter bar when sort bar is clicked
        $(document).ready(function () {
            $('.sort').click(function () {
                $(this).button('toggle');
                $('#filter').collapse('hide');
                $('#sort').collapse('show');
            });
        });

        //Filter show/hide sort
        $(document).ready(function () {
            var $filterSort = $("#filterSort");
            $filterSort.click(function () {
                if (($filterSort.attr('aria-pressed')) == "false") {
                    $("#filterSortForm").css("display", "Block");
                    $filterSort.text("Hide Sort Options");
                }
                else {
                    $("#filterSortForm").css("display", "None");
                    $filterSort.text("Show Sort Options");
                }
            });
        });

        //Filter reset
        $(document).ready(function () {
            $("#resetForm").click(function () {
                window.location.href = ((window.location.href).split('?'))[0];
            });
        });

        $(document).ready(function (e) {
            var url;
            var ready = true;
            var scrollTrigger = 100;
            var container = $(".icons");

            container.on("click", ".next", function (e) {
                e.preventDefault();
                if (document.URL.split('?')[1] == undefined) {
                    url = $('.next a').attr('href');
                }
                else {
                    url = $('.next a').attr('href') + '?' + document.URL.split('?')[1];
                }
                $(this).remove();
                if ((url.split('?')[0]) === "undefined") {
                    return false;
                }
                $.get(url, function (data) {
                    $('.icons').append(data);
                });
            });

            container.on("click", ".next a", function (e) {
                e.preventDefault();
                if (document.URL.split('?')[1] == undefined) {
                    url = $('.next a').attr('href');
                }
                else {
                    url = $('.next a').attr('href') + '?' + document.URL.split('?')[1];
                }
                $(this).remove();
                if ((url.split('?')[0]) === "undefined") {
                    return false;
                }
                $.get(url, function (data) {
                    $('.icons').append(data);
                });
            });
        });
    </script>
<?php } ?>