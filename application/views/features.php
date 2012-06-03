<div class="grid_8">
    <h2><?php echo $title; ?></h2>
    <p><?php echo $sub_title; ?></p>
    <div class="grid_4 alpha">
        <ul class="iconlist clean">
            <?php foreach($items as $index => $item) {
            if($index % 2)
                continue;
            ?>
            <li class="clearfix">
                <img src="<?php echo $item['img']; ?>" alt="Icon" class="left" />
                <h5><a href="<?php echo $item['href']; ?>"><?php echo $item['link']; ?></a></h5>
                <p><?php echo $item['p']; ?></p>
            </li>
            <?php } ?>
        </ul>
    </div><!-- grid_4 alpha (nested column start)-->
    <div class="grid_4 omega">
        <ul class="iconlist clean">
            <?php foreach($items as $index => $item) {
            if(!($index % 2))
                continue;
            ?>
            <li class="clearfix">
                <img src="<?php echo $item['img']; ?>" alt="Icon" class="left" />
                <h5><a href="<?php echo $item['href']; ?>"><?php echo $item['link']; ?></a></h5>
                <p><?php echo $item['p']; ?></p>
            </li>
            <?php } ?>
        </ul>
    </div><!-- grid_4 omega (nested column end)-->
</div><!--//grid_8-->