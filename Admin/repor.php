
<!DOCTYPE html>
<html>
<head>
    <title>Admin Report</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Admin Report</h1>
    <form action="generate_report.php" method="post" id="report-form">
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" required>
        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" required>
        
        <label>Select Report Type:</label>
        <select name="report_type" required>
            <option value="all">Full Report</option>
            <option value="booking">Booking Report</option>
            <option value="activity">Activity Report</option>
            <option value="payment">Payment Report</option>
            <option value="maintenance">Maintenance Report</option>
            <option value="camps">Camps Report</option>
            <option value="team_building">Team Building Report</option>
            <option value="holiday_club">Holiday Club Report</option>
        </select>
        
        <label for="activity">Select Activity (for Activity Report):</label>
        <select name="activity">
            <option value="Adventure Camp">Activity A</option>
            <option value="activity_id_2">Activity B</option>
            <option value="activity_id_3">Activity C</option>
            <option value="activity_id_4">Activity D</option>
        </select>
        
        <input type="submit" name="generate_report" value="Generate Report">
    </form>

    <div id="report-container"></div>

    <script src="script.js"></script>
</body>
</html>




<script>
JAVASCRIPT

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('report-form');
    const reportContainer = document.getElementById('report-container');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        const formData = new FormData(form);

        fetch('generate_report.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.text())
        .then(data => {
            reportContainer.innerHTML = data;
        })
        .catch(error => {
            console.error('An error occurred:', error);
        });
    });
});

</script>
<style>
CSS


/* Add your custom CSS for styling here */

table {
    border-collapse: collapse;
    width: 100%;
    margin: 20px auto;
}

table, th, td {
    border: 1px solid #000;
}

th, td {
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

/* Additional styling can be added based on your design preferences */
</style>