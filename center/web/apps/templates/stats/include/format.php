<?php foreach ($data as $td):
    $bg_color = $td['succ_rate'] > 90 ? "#DFFFDF" : "#FFDFDF";
    ?>
    <tr style="background-color: <?=$bg_color?>;">
        <td><?= $td['interface_name'] ?></td>
        <td><?= empty($td['time_str']) ? '00:00 ~ 23:55' : $td['time_str'] ?></td>
        <td><?= number_format($td['total_count']) ?></td>
        <td><a href="javascript: StatsG.openSuccPage(<?=$td['module_id']?>,<?=$td['interface_id']?>)" style="color: green">
                <?= number_format($td['succ_count']) ?></a></td>
        <td><a href="javascript: StatsG.openFailPage(<?=$td['module_id']?>,<?=$td['interface_id']?>)"
               style="color: <?=$td['fail_count'] > 0? "red" :'black'?>"><?= number_format($td['fail_count']) ?></a></td>
        <td style="color: green"><?= $td['succ_rate'] ?>%</td>
        <td><?= $td['max_time'] ?>ms</td>
        <td><?= $td['min_time'] ?>ms</td>
        <td><?= $td['avg_time'] ?>ms</td>
        <td><?= $td['avg_fail_time'] ?>ms</td>
        <td>
            <?php if (!$this->isActiveMenu('stats', 'detail')):?><a href="/stats/detail/?module_id=<?= $td['module_id'] ?>&interface_id=<?= $td['interface_id'] ?>&date_key=<?= $_GET['date_key'] ?>"">查看明细</a>
            &nbsp;&nbsp;|&nbsp;&nbsp; <?php endif; ?>
            <a href="/stats/history/?module_id=<?= $td['module_id'] ?>&interface_id=<?= $td['interface_id'] ?>&date_key=<?= $_GET['date_key'] ?>">历史数据对比</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="/stats/client/?module_id=<?= $td['module_id'] ?>&interface_id=<?= $td['interface_id'] ?>&date_key=<?= $_GET['date_key'] ?>">主调明细</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="/stats/server/?module_id=<?= $td['module_id'] ?>&interface_id=<?= $td['interface_id'] ?>&date_key=<?= $_GET['date_key'] ?>">被调明细</a>
        </td>
    </tr>
<?php endforeach; ?>