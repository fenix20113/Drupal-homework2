<ul style="list-style: none">

    <li>
        <ul style="list-style: none; padding: 0; margin-bottom: 10px;">
            <li>
                <a href="<?php print $simple_feed->link ?>">
                    <h2 style="border:none; font-size: 16px"><?php print $simple_feed->title; ?> </h2>
                </a>
            </li>
            <li><?php print $simple_feed->description; ?></li>
            <li style="color: red"><?php print $simple_feed->pubDate; ?></li>
        </ul>

    </li>
</ul>