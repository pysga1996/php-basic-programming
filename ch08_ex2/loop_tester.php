<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Loop Tester</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
<div id="content">
    <h1>Loop Tester</h1>
    <h2>Process Scores</h2>
    <form action="." method="post">
        <input type="hidden" name="action" value="process_scores" />

        <label>Score 1:
            <input type="text" name="scores[]" value="<?php if (isset($scores[0])) echo $scores[0]; ?>"/>
        </label>
        <br />

        <label>Score 2:
            <input type="text" name="scores[]" value="<?php if (isset($scores[1])) echo $scores[1]; ?>"/>
        </label>
        <br />

        <label>Score 3:
            <input type="text" name="scores[]" value="<?php if (isset($scores[2])) echo $scores[2]; ?>"/>
        </label>
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Process Scores" /><br />

        <label>Scores:</label>
        <span><?php if (isset($scores_string)) echo $scores_string; ?></span><br />

        <label>Score Total:</label>
        <span><?php if (isset($score_total)) echo $score_total; ?></span><br />

        <label>Average Score:</label>
        <span><?php if (isset($score_average)) echo $score_average; ?></span><br />
    </form>
    <br />
    <h2>Process 1000 Die Rolls</h2>
    <form action="." method="post">
        <input type="hidden" name="action" value="process_rolls" />

        <label>Number to Roll:
            <select name="number_to_roll">
				<?php foreach ([1, 2, 3, 4, 5, 6] as $value) : ?>
                    <option value="<?php echo $value ?>" <?php if (isset($_SESSION['number_to_roll'])? ($value == $_SESSION['number_to_roll']) : ($value == 1)) echo 'selected' ?>><?php echo $value ?></option>
				<?php endforeach; ?>
            </select>
        </label>
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Process Rolls" /><br />

        <label>Maximum Rolls:</label>
        <span><?php if (isset($max_rolls)) echo $max_rolls; ?></span><br />

        <label>Average Rolls:</label>
        <span><?php if (isset($average_rolls)) echo $average_rolls; ?></span><br />

    </form>

</div>
</body>
</html>