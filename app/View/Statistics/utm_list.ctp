<h1>UTM Statistics</h1>

<?php foreach ($data as $source => $mediums): ?>

    <div>
        <strong><?php echo $source; ?></strong>

        <?php foreach ($mediums as $medium => $campaigns): ?>

            <div style="margin-left:20px;">
                <?php echo $medium; ?>

                <?php foreach ($campaigns as $campaign => $contents): ?>

                    <div style="margin-left:40px;">
                        <?php echo $campaign; ?>

                        <?php foreach ($contents as $content => $terms): ?>

                            <div style="margin-left:60px;">
                                <?php echo $content ?: 'NULL'; ?>

                                <?php foreach ($terms as $term): ?>

                                    <div style="margin-left:80px;">
                                        <?php echo $term ?: 'NULL'; ?>
                                    </div>

                                <?php endforeach; ?>

                            </div>

                        <?php endforeach; ?>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endforeach; ?>

    </div>
    

<?php endforeach; ?>

<div class="pagination">
    <?php
        echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled'));
        echo $this->Paginator->numbers();
        echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled'));
    ?>
</div>
