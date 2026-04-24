<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 4: Nested Conditions — Loan Eligibility Checker [6 marks]
 *
 * IMPORTANT: You must complete pseudocode AND flowchart in your PDF
 * report BEFORE writing any code below.
 *
 * @author     Robin Wanyonyi
 * @student    ENE212-0208/2023
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       02/04/2026
 */

// HELB Loan Eligibility Checker
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loan Eligibility</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; max-width: 900px; }
        th, td { border: 1px solid #333; padding: 10px; text-align: left; }
        th { background: #222; color: #fff; }
    </style>
</head>
<body>
    <h1>Required Test Data Sets</h1>
    <?php
    $sets = [
        'A' => ['enrolled' => true, 'gpa' => 3.1, 'income' => 180000, 'prev_loan' => false],
        'B' => ['enrolled' => true, 'gpa' => 1.8, 'income' => 80000, 'prev_loan' => false],
        'C' => ['enrolled' => false, 'gpa' => 3.5, 'income' => 60000, 'prev_loan' => true],
        'D' => ['enrolled' => true, 'gpa' => 2.5, 'income' => 600000, 'prev_loan' => true],
        'E' => ['enrolled' => true, 'gpa' => 2.0, 'income' => 50000, 'prev_loan' => true],
    ];

    function determine_eligibility($enrolled, $gpa, $income, $prev_loan) {
        if (!$enrolled) return "Not enrolled";
        if ($gpa < 2.0) return "GPA fail";
        if ($income > 500000) return "Income fail";
        if ($prev_loan) return "Full | Renewal";
        return "Partial 75% | New";
    }
    ?>
    <table>
        <thead>
            <tr>
                <th>Set</th>
                <th>Enrolled</th>
                <th>GPA</th>
                <th>Income (KES)</th>
                <th>Prev loan</th>
                <th>Expected</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sets as $key => $d): ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $d['enrolled'] ? 'true' : 'false'; ?></td>
                <td><?php echo $d['gpa']; ?></td>
                <td><?php echo number_format($d['income']); ?></td>
                <td><?php echo $d['prev_loan'] ? 'true' : 'false'; ?></td>
                <td><?php echo determine_eligibility($d['enrolled'], $d['gpa'], $d['income'], $d['prev_loan']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
