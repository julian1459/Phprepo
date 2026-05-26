<?php require 'header.inc'; ?>

    <table class="resume-table">
        <tbody>
            <tr>
                <td width="30%">
                    <img src="ResumePic.png" class="resume-photo">
                </td>
                <td class="clickable-row">
                    <a href="personal_info.php" class="resume-section-link">
                        <?php include('personal_info.php'); ?>
                    </a>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="clickable-row">
                    <a href="objective.php" class="resume-section-link">
                        <?php include('objective.php'); ?>
                    </a>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="clickable-row">
                    <a href="education.php" class="resume-section-link">
                        <?php include('education.php'); ?>
                    </a>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="clickable-row">
                    <a href="skills.php" class="resume-section-link">
                        <?php include('skills.php'); ?>
                    </a>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="clickable-row">
                    <a href="affiliation.php" class="resume-section-link">
                        <?php include('affiliation.php'); ?>
                    </a>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="clickable-row">
                    <a href="experience.php" class="resume-section-link">
                        <?php include('experience.php'); ?>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>

<?php require 'footer.inc'; ?>