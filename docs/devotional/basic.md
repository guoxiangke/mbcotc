# 慕安德烈每日靈修

<style>
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 10px;
            background: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin: 10px 0;
            border-top: none;
            border-bottom: none;
        }

        .calendar {
            display: flex;
            flex-wrap: wrap; /* 换行 */
            gap: 10px; /* 设置间隔 */
            justify-content: flex-start; /* 靠左对齐 */
        }

        .day {
            flex: 0 0 calc(14.28% - 10px); /* 7等份，减去间距 */
            text-align: center;
            padding: 10px;
            background-color: #f0f4f8;
            border: 1px solid #dfe3e8;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .calendar .day a {
            text-decoration: none; /* 去掉下划线 */
            color: #2c662d; /* 设置颜色 */
        }

        .day:hover {
            background-color: #e3efff;
        }
        /* 响应式优化 */
        @media (max-width: 600px) {
            .day {
                flex: 1 0 calc(33.33% - 10px); /* 小屏幕每行3个 */
            }
        }
    </style>