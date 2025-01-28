# PHP Object Reference Reassignment Bug

This repository demonstrates a common, subtle bug in PHP related to object references and reassignment within functions.  The code illustrates how reassigning an object reference inside a function does not modify the original object outside the function's scope.

The `bug.php` file contains the problematic code, while `bugSolution.php` provides the corrected version.

This example highlights the importance of understanding how PHP handles references and the potential unexpected behavior when modifying object references within functions. Carefully review how you're passing objects to your functions to avoid this issue.