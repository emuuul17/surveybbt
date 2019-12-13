<?php if($ListData) : ?>
            <table class="table table-bordered" id="dataTable" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pertanyaan 1</th>
                    <th>Pertanyaan 2</th>
                    <th>Pertanyaan 3</th>
                    <th>Pertanyaan 4</th>
                    <th>Pertanyaan 5</th>
                    <th>Pertanyaan 6</th>
                    <th>Pertanyaan 7</th>
                    <th>Total</th>
                    <th>Kesimpulan</th>
                </tr>
        <?php 
        $i = 1;
        foreach($ListData as $pertanyaan) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?= $pertanyaan['nama']; ?></td>
                    <td><?= $pertanyaan['pelatihan_survey_1']; ?></td>
                    <td><?= $pertanyaan['pelatihan_survey_2']; ?></td>
                    <td><?= $pertanyaan['pelatihan_survey_3']; ?></td>
                    <td><?= $pertanyaan['pelatihan_survey_4']; ?></td>
                    <td><?= $pertanyaan['pelatihan_survey_5']; ?></td>
                    <td><?= $pertanyaan['pelatihan_survey_6']; ?></td>
                    <td><?= $pertanyaan['pelatihan_survey_7']; ?></td>
                    <td><?= $pertanyaan['nilai']; ?></td>
                    <td><?= $pertanyaan['kesimpulan']; ?></td> 
                    </tr>
        <?php 
        $paging=(!empty($pagermessage) ? $pagermessage : '');
        $i++;
            endforeach; 
            // echo "<tr><td colspan='9'><div style='background:000;'>$paging &nbsp;".$this->pagination->create_links()."</div></td></tr>";
            ?>
                </table>
        <?php else : ?> 
            <p>No Data</p>
        <?php endif; ?>
        </div>