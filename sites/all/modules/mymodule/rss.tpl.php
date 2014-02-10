<ul style="list-style: none">

    <li style="text-align: center;font-size: 16px">TOP 5 НОВОСТЕЙ</li>
    <li>
        <h1><?php print $rows[0]; ?></h1>
    </li>
    <li>
        <?php foreach ($rows as $row): ?>

            <ul style="list-style: none; padding: 0; margin-bottom: 10px;">
                <li>
                    <a href="<?php print $row['url'] ?>">
                        <h2 style="border:none; font-size: 16px"><?php print $row['title']; ?> </h2>
                    </a>
                </li>
                <li><?php print $row['desc']; ?></li>
            </ul>
        <?php endforeach; ?>
    </li>
</ul>