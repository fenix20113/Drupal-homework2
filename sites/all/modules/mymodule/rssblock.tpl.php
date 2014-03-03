<ul style="list-style: none">

     <li>
        <?php foreach ($rows->channel->item as $item): ?>

            <ul style="list-style: none; padding: 0; margin-bottom: 10px;">
                <li>
                    <a href="<?php print $item->link ?>">
                        <h2 style="border:none; font-size: 16px"><?php print $item->title; ?> </h2>
                    </a>
                </li>
                <li><?php print $item->description; ?></li>
                <li style="color: red"><?php print $item->pubDate; ?></li>
            </ul>
        <?php endforeach; ?>
    </li>
</ul>