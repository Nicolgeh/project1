<div class="section topics">
                <h3>Topics</h3>
                <ul>
                    <?php foreach($topics as $key => $value): ?>
                    <li><a href="#"><?= $value['name']; ?></a></li>
                    <?php endforeach; ?>
                    
                </ul>
            </div>