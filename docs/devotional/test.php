<?php
// 定义月份和天数
$months = [
    '12' => '12月',
    '01' => '1月', '02' => '2月', '03' => '3月', '04' => '4月',
    '05' => '5月', '06' => '6月', '07' => '7月', '08' => '8月',
    '09' => '9月', '10' => '10月', '11' => '11月', 
];

function generateCalendar($months) {
    foreach ($months as $monthNumber => $monthName) {
        // 获取每个月的天数
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, (int)$monthNumber, date('Y'));

        // 输出月份标题
        echo "<h2>{$monthName}</h2>";
        echo '<div class="calendar">';

        // 遍历每一天
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $formattedDay = sprintf('%02d', $day); // 格式化成两位数，如 01, 02
            $link = "/devotional/CN/{$monthNumber}{$formattedDay}.html";
            echo "<div><a href='{$link}'>{$monthName}{$day}日</a></div>";
        }

        echo '</div>'; // 结束 .calendar
    }
}

generateCalendar($months);