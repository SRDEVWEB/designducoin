<?php
?>
<!DOCTYPE html>
<html lang="fr">


<div class="accordion">
        <!-- span to target fix closing accordion -->
        <span class="target-fix" id="accordion"></span>
         
        <!-- First Accoridon Option -->
        <div>
            <!-- span to target fix accordion -->
            <span class="target-fix" id="accordion1"></span>
            
            <!-- Link to open accordion, hidden when open --> 
            <a href="#accordion1" id="open-accordion1" title="open">First Accordion</a>
            
            <!-- Link to close accordion, hidden when closed -->
            <a href="#accordion" id="close-accordion1" title="close">First Accordion</a> 
            
            <!-- Accorion content goes in this div -->
            <div class="accordion-content">
                <p>Accordion 1 Content</p>
            </div>
        </div>

        <!-- Second Accoridon Option -->
        <div>
            <span class="target-fix" id="accordion2"></span>
            <a href="#accordion2" id="open-accordion2" title="open">Second Accordion</a>
            <a href="#accordion" id="close-accordion2" title="close">Second Accordion</a>
            <div class="accordion-content">
                <p>Accordion 2 Content.</p>       
            </div>
        </div>

        <!-- Third Accoridon Option -->
        <div>
            <span class="target-fix" id="accordion3"></span>
            <a href="#accordion3" id="open-accordion3" title="open">Third Accordion</a>
            <a href="#accordion" id="close-accordion3" title="close">Third Accordion</a>
            <div class="accordion-content">
                <p>Accordion 3 Content</p>
            </div>
        </div>
    </div>

</html>