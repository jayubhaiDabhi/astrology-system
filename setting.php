<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
        :root[data-theme="light"] {
            --bg-primary: #ffffff;
            --bg-secondary: #f5f5f5;
            --text-primary: #333333;
            --text-secondary: #666666;
            --accent-primary: #9f2800;
            --accent-secondary: #d57e2f;
            --border-color: #dddddd;
            --hover-bg: #fff3e6;
            --modal-bg: rgba(0, 0, 0, 0.5);
            --error-bg: #f8d7da;
            --error-text: #721c24;
        }

        :root[data-theme="dark"] {
            --bg-primary: #1a1a1a;
            --bg-secondary: #2d2d2d;
            --text-primary: #ffffff;
            --text-secondary: #cccccc;
            --accent-primary: #ff6b4a;
            --accent-secondary: #ffa07a;
            --border-color: #404040;
            --hover-bg: #3d3d3d;
            --modal-bg: rgba(0, 0, 0, 0.8);
            --error-bg: #442326;
            --error-text: #ff8b96;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: background-color 0.3s, color 0.3s;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: var(--bg-secondary);
            color: var(--text-primary);
        }

        /* Theme Toggle Button */
        .theme-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px;
            border-radius: 50%;
            background: var(--accent-primary);
            color: var(--bg-primary);
            border: none;
            cursor: pointer;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .calendar-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: var(--bg-primary);
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px;
            background: var(--bg-secondary);
            border-radius: 8px;
        }

        .calendar-header button {
            background: var(--accent-primary);
            color: var(--bg-primary);
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .calendar-header button:hover {
            background: var(--accent-secondary);
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .calendar-day-header {
            text-align: center;
            padding: 10px;
            background: var(--accent-primary);
            color: var(--bg-primary);
            font-weight: bold;
            border-radius: 4px;
        }

        .calendar-day {
            min-height: 100px;
            padding: 10px;
            border: 1px solid var(--border-color);
            background: var(--bg-primary);
            border-radius: 4px;
            cursor: pointer;
            position: relative;
        }

        .calendar-day:hover {
            background: var(--hover-bg);
        }

        .calendar-day.today {
            border: 2px solid var(--accent-primary);
        }

        .calendar-day.other-month {
            color: var(--text-secondary);
            background: var(--bg-secondary);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--modal-bg);
            z-index: 1000;
        }

        .modal-content {
            position: relative;
            background: var(--bg-primary);
            margin: 50px auto;
            padding: 20px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .close {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 24px;
            cursor: pointer;
            color: var(--accent-primary);
        }

        /* Panchang Table Styles */
        .panchang-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .panchang-table th,
        .panchang-table td {
            padding: 12px;
            border: 1px solid var(--border-color);
            text-align: left;
        }

        .panchang-table th {
            background: var(--accent-primary);
            color: var(--bg-primary);
        }

        .panchang-table tr:nth-child(even) {
            background: var(--bg-secondary);
        }

        /* Event Styles */
        .event-dot {
            width: 8px;
            height: 8px;
            background: var(--accent-secondary);
            border-radius: 50%;
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
        }

        .event-form {
            margin-top: 20px;
            padding: 20px;
            background: var(--bg-secondary);
            border-radius: 4px;
        }

        .event-form input,
        .event-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            background: var(--bg-primary);
            color: var(--text-primary);
        }

        .event-form button {
            background: var(--accent-primary);
            color: var(--bg-primary);
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .event-list {
            margin-top: 10px;
        }

        .event-item {
            padding: 10px;
            margin-bottom: 5px;
            background: var(--bg-primary);
            border-left: 3px solid var(--accent-primary);
            border-radius: 2px;
        }

        /* Loading and Error States */
        .loading {
            text-align: center;
            padding: 20px;
            color: var(--text-secondary);
        }

        .error-message {
            color: var(--error-text);
            background: var(--error-bg);
            padding: 10px;
            border-radius: 4px;
            margin: 10px 0;
        }

        @media (max-width: 768px) {
            .calendar-header {
                flex-direction: column;
                gap: 10px;
            }
            
            .calendar-day {
                min-height: 80px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <!-- Theme Toggle Button -->
    <button class="theme-toggle" onclick="toggleTheme()" title="Toggle Theme">
        <i class="fas fa-moon" id="theme-icon"></i>
    </button>

    <!-- Your existing calendar HTML -->
    <div class="calendar-container">
        <!-- ... existing content ... -->
    </div>

    <script>
        // Theme Toggle Function
        function toggleTheme() {
            const html = document.documentElement;
            const themeIcon = document.getElementById('theme-icon');
            
            if (html.getAttribute('data-theme') === 'light') {
                html.setAttribute('data-theme', 'dark');
                themeIcon.className = 'fas fa-sun';
                localStorage.setItem('theme', 'dark');
            } else {
                html.setAttribute('data-theme', 'light');
                themeIcon.className = 'fas fa-moon';
                localStorage.setItem('theme', 'light');
            }
        }

        // Load saved theme preference
        document.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme') || 'light';
            const themeIcon = document.getElementById('theme-icon');
            
            document.documentElement.setAttribute('data-theme', savedTheme);
            themeIcon.className = savedTheme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
            
            // Your existing initialization code
            generateCalendar(currentDate);
        });

        // Keep your existing JavaScript functions
        // ... rest of your JavaScript code ...
    </script>
</body>
</html>