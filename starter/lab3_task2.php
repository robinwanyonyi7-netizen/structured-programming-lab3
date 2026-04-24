<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 2: JKUAT Grade Classification System [8 marks]
 *
 * IMPORTANT: You must complete pseudocode AND flowchart in your PDF
 * report BEFORE writing any code below. Marks are awarded for all
 * three components: pseudocode, flowchart, and working code.
 *
 * @author     Robin Wanyonyi
 * @student    ENE212-0208/2023
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       02/04/2026
 */

// ── Test Data Set A (change values to run other test sets) ─────────────────
$name  = "SET E" . "<br>"; // student name
echo $name . "<br>";

echo "<hr>";


// ── Grade Rules (implement using if-elseif-else, ordered highest first) ────
// A  (Distinction):    Total >= 70
// B+ (Credit Upper):   Total >= 65
// B  (Credit Lower):   Total >= 60
// C+ (Pass Upper):     Total >= 55
// C  (Pass Lower):     Total >= 50
// D  (Marginal Pass):  Total >= 40
// E  (Fail):           Total <  40
$cat1  = 0;  // out of 10
$cat2  = 0;  // out of 10
$cat3  = 0;  // out of 10
$cat4  = 0;  // out of 10
$exam  = 15; // out of 60

echo "CAT 1 Score: $cat1 * <br>";
echo "CAT 2 Score: $cat2 * <br>";
echo "CAT 3 Score: $cat3 * <br>";
echo "CAT 4 Score: $cat4 * <br>";
echo "Exam Score: $exam * <br>";

$cats_attended = 0;
if ($cat1 > 0) $cats_attended++;
if ($cat2 > 0) $cats_attended++;
if ($cat3 > 0) $cats_attended++;
if ($cat4 > 0) $cats_attended++;

$total = $cat1 + $cat2 + $cat3 + $cat4 + $exam;
$eligible = ($cats_attended >= 3 && $exam >= 20);

if ($eligible) {
    echo "Total Score: $total * - ";
    echo "Eligible for Grade Classification <br>";

    if ($total >= 70) {
        echo $grade = "A (Distinction) ";
    } elseif ($total >= 65) {
        echo $grade = "B+ (Credit Upper) ";
    } elseif ($total >= 60) {
        echo $grade = "B (Credit Lower) ";
    } elseif ($total >= 55) {
        echo $grade = "C+ (Pass Upper) ";
    } elseif ($total >= 50) {
        echo $grade = "C (Pass Lower) ";
    } elseif ($total >= 40) {
        echo $grade = "D (Marginal Pass) ";
    } else {
        echo $grade = "E (Fail) ";
    }
} else {
    echo "DISQUALIFIED — Exam conditions not met <br>";
    echo "Not worthy of a grade Classification<br>";
    $grade = "N/A";
}

echo "<hr>";
// ── Eligibility Rule (implement using nested if) ───────────────────────────
// Must have attended at least 3 of 4 CATs (CAT score > 0 counts as attended)
// AND exam score >= 20
// Otherwise: "DISQUALIFIED — Exam conditions not met"

// ── STEP 2: Count CATs attended ───────────────────────────────────────────
// TODO: compute $cats_attended (each CAT > 0 counts as attended)


// ── STEP 1: Compute total ─────────────────────────────────────────────────
// TODO: compute $total




// ── Supplementary Rule (implement using ternary) ──────────────────────────
// If grade is D: "Eligible for Supplementary Exam"
// Otherwise:     "Not eligible for supplementary"


// ── STEP 2: Count CATs attended ───────────────────────────────────────────
// TODO: compute $cats_attended (each CAT > 0 counts as attended)


// ── STEP 3: Eligibility check (nested if) ─────────────────────────────────
// TODO: nested if — eligibility → grade classification → supplementary ternary


// ── STEP 4: Display formatted HTML report card ────────────────────────────
// TODO: output a clear, formatted report card showing:
//       student name, each CAT score, exam score, total,
//       cats attended, eligibility status, grade, remark, supplementary status



// ── Required Test Data Sets — screenshot each ─────────────────────────────
// Set A: cat1=8, cat2=7, cat3=9, cat4=6,  exam=52  → expect grade B
// Set B: cat1=9, cat2=8, cat3=0, cat4=9,  exam=55  → expect grade A (check cats_attended)
// Set C: cat1=0, cat2=0, cat3=7, cat4=0,  exam=48  → expect DISQUALIFIED
// Set D: cat1=5, cat2=4, cat3=6, cat4=3,  exam=22  → expect grade D + supp eligible
// Set E: cat1=0, cat2=0, cat3=0, cat4=0,  exam=15  → expect DISQUALIFIED
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Result Card</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 20px;
            background: #f1f1f1;
        }
        h1 { text-align: center; }
        table { border-collapse: collapse; width: 100%; max-width: 960px; margin: 0 auto; background: #fff; }
        th, td { border: 1px solid #333; padding: 8px; text-align: center; }
        th { background: #111; color: #fff; }
        .status-ok { color: green; font-weight: bold; }
        .status-no { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Required Test Data Sets</h1>
    <?php
    $sets = [
        'A' => ['cat1'=>8,'cat2'=>7,'cat3'=>9,'cat4'=>6,'exam'=>52, 'expected'=>'Grade B'],
        'B' => ['cat1'=>9,'cat2'=>8,'cat3'=>0,'cat4'=>9,'exam'=>55, 'expected'=>'Grade A'] ,
        'C' => ['cat1'=>0,'cat2'=>0,'cat3'=>7,'cat4'=>0,'exam'=>48, 'expected'=>'DISQUALIFIED'],
        'D' => ['cat1'=>5,'cat2'=>4,'cat3'=>6,'cat4'=>3,'exam'=>22, 'expected'=>'Grade D + supp eligible'],
        'E' => ['cat1'=>0,'cat2'=>0,'cat3'=>0,'cat4'=>0,'exam'=>15, 'expected'=>'DISQUALIFIED'],
    ];

    function calc_grade($total) {
        if ($total >= 70) return 'A (Distinction)';
        if ($total >= 65) return 'B+ (Credit Upper)';
        if ($total >= 60) return 'B (Credit Lower)';
        if ($total >= 55) return 'C+ (Pass Upper)';
        if ($total >= 50) return 'C (Pass Lower)';
        if ($total >= 40) return 'D (Marginal Pass)';
        return 'E (Fail)';
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>Set</th>
                <th>CAT1</th>
                <th>CAT2</th>
                <th>CAT3</th>
                <th>CAT4</th>
                <th>Exam</th>
                <th>Total</th>
                <th>Attended</th>
                <th>Eligible</th>
                <th>Grade</th>
                <th>Supplementary</th>
                <th>Expected</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sets as $key => $d):
                $cats_attended = count(array_filter([$d['cat1'],$d['cat2'],$d['cat3'],$d['cat4']], fn($x) => $x > 0));
                $total = $d['cat1'] + $d['cat2'] + $d['cat3'] + $d['cat4'] + $d['exam'];
                $eligible = ($cats_attended >= 3 && $d['exam'] >= 20);
                $grade = $eligible ? calc_grade($total) : 'N/A';
                $supp = $eligible ? 'Not eligible' : 'Eligible';
                $eligText = $eligible ? '<span class="status-ok">Yes</span>' : '<span class="status-no">No</span>';
            ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $d['cat1']; ?></td>
                <td><?php echo $d['cat2']; ?></td>
                <td><?php echo $d['cat3']; ?></td>
                <td><?php echo $d['cat4']; ?></td>
                <td><?php echo $d['exam']; ?></td>
                <td><?php echo $total; ?></td>
                <td><?php echo $cats_attended; ?></td>
                <td><?php echo $eligText; ?></td>
                <td><?php echo $grade; ?></td>
                <td><?php echo $supp; ?></td>
                <td><?php echo $d['expected']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
