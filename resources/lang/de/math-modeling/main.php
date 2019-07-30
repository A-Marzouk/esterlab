<?php

// german

return [

    'math_modeling' => 'Mathematische Modellierung',
    'solving_mechanical_problems' => 'Lösung mechanischer Probleme',


    'main_description' => 'Lösung mechanischer Probleme mit numerischem Verfahren
Die Konstruktionsfestigkeit ist eine strenge Anforderung für den Produktentwurf. In jeder Branche stellen sich Ingenieure die gleichen grundlegenden Fragen: „Wie lange wird dieses Produkt täglich gebraucht?“, „Unter welchen Bedingungen geht es kaputt?“ und viele andere.',
    'sub_description' => 'Und es gibt unendlich viele Fragen "Was wäre wenn ...", zum Beispiel: "Was passiert, wenn die Dicke dieser Rippe für die Materialeinsparung um 1 mm reduziert wird?" Die Lösungen für die Mechanik deformierbarer Festkörper ermöglichen uns, insbesondere unter Einsatz von ANSYS Mechanical, ähnliche Probleme zu lösen.',


    'tasks_head' => 'Unser Team löst folgende Aufgaben:',

    'task1' => 'Festigkeitsanalyse – statische Analyse;',
    'task2' => 'Stabilität',
        'task2_sub1' => 'linear',
        'task2_sub2' => 'nichtlinear',
    'task3' => 'dynamische Analyse - Übergangsverhaltenanalyse:',
        'task3_sub1' => 'Modalanalyse',
        'task3_sub2' => 'harmonische Antwort',
        'task3_sub3' => 'spektrale Antwort',
        'task3_sub4' => 'zufällige Vibrationen',
    'task4' => 'Superelemente',
    'task5' => 'Formoptimierung',
    'task6' => 'Kontaktaufgaben - Gleiten mit Trennung',
        'task6_sub1' => 'Reibung',
        'task6_sub2' => 'Dichtungen',
    'task7' => 'Thermische Analyse :',
        'task7_sub1' => 'stationär',
        'task7_sub2' => 'nichtstationär',
    'task8' => 'Wärmemodelle',
        'task8_sub1' => 'Leitfähigkeit',
        'task8_sub2' => 'Konvektion',
        'task8_sub3' => 'Strahlung',
        'task8_sub4' => 'thermische Festigkeit',

    'static_calc_head' => 'Statische Berechnungen',
    'static_calc_main_desc' => 'Die Konstruktionsfestigkeitsprobe ist die gebräuchlichste Berechnungsart im Rahmen der Mechanik eines deformierbaren Festkörpers, die von Ingenieuren aller Branchen durchgeführt wird. Unser Team bietet die Möglichkeit, mit Hilfe der mathematischen Modellierung den Spannungs- und Deformationszustand (SDZ) der Konstruktion beliebiger Komplexität zu berechnen.
Als typische Einsatzbereiche von statischen Berechnungen können angewiesen werden:',
    'static_calc_desc_point1' => 'Schnellbewertung von Spannungs- und Deformationszustand der Konstruktionseinheiten.',
    'static_calc_desc_point2' => 'Berechnungen von belasteten Teilen unter Berücksichtigung der nichtlinearen Antwort von Werkstoffen.',
    'static_calc_desc_point3' => 'Die Lösung von Kontaktaufgaben: Berechnung von Dichtungen, Berechnung von Formgebung und Umformung, Berechnung von Vielkeilverbindungen und Kupplungen, Modellierung von Schraubverbindungen usw.',
    'static_calc_desc_point4' => 'Die Probe von Spannungs- und Deformationszustand der Konstruktionen durch Erwärmung oder Abkühlung. ANSYS Mechanical ist in vielen Industriebranchen zertifiziert, und es garantiert sowohl eine hohe Qualität und Genauigkeit der Berechnungen als auch einen hohen Verifizierungsgrad der erhaltenen Ergebnisse mit experimentellen Daten.',


    'examples_head' => 'Einige Beispiele von gelösten Problemen.',

    'static_strength_body' => 'Statische Festigkeit des Buskörpers',
    'static_strength_gear' => 'Statische Festigkeit der Verzahnungsorgane',
    'static_strength_joint' => 'Statische Festigkeit der Schraubverbindung in einer nichtlinearen Darstellung',
    'static_strength_installation' => 'Statische Festigkeit der Installation zur Bestimmung des thermischen Drucks',
    'static_strength_roller' => 'Statische Festigkeit eines Typs der Zwischenkeilrolle',
    'static_strength_tool' => 'Statische Festigkeit des Schneidwerkzeugs (Fräser)',
    'static_strength_pressure' => 'Statische Festigkeit der Kapazität vom Innendruck',

    'dynamic_calc' => 'Dynamische Berechnungen',
    'dynamic_calc_main_desc' => 'Die Resonanz ist eines der gefährlichsten Phänomene in der Technik. Die Fähigkeit, die Zusammensetzung der Eigenfrequenzen der Konstruktion herauszufinden, ermöglicht das Auftreten von Resonanzen zu vermeiden, und die hohe Zuverlässigkeit der Konstruktion und die lange Lebensdauer sicherzustellen.',
    'dynamic_calc_main_desc2' => 'Um dieses Problem zu lösen, wird die Möglichkeit der Modalanalyse – der Analyse von Eigenfrequenzen und Schwingungsmoden der Konstruktionen realisiert. Das sind die wichtigsten dynamischen Eigenschaften jedes mechanischen Systems, und mit ihrer Bestimmung beginnt jede dynamische Berechnung von Konstruktionen.',


    'first_forms' => 'Die ersten Formen von Eigenschwingungen des Buskörpers',
    'gearing_elements' => 'Beispiel  von Schwingungsformen der Verzahnungseinheiten',


    'thermal_calc' => 'Thermische Berechnungen',

    'thermal_calc_point1' => 'Das Hauptziel der Wärmeabgabe ist in der Regel die Bestimmung der Temperaturfelder und Wärmeströme sowohl in den Einzelteilen als auch in den ganzen Konstruktionen.',
    'thermal_calc_point2' => 'Wir haben drei Arten der Wärmeabgabe modelliert. Das sind Wärmeleitfähigkeit des isotropen oder orthotropen Werkstoffs, Konvektionswärmeübergang und Wärmestrahlung mit der Umgebung.',

    'finite_element_motor' => 'FE - Modell des Elektromotors mit dem Schwungrad',
    'pressure_distribution' => 'Druckverteilung auf das Pumpenlaufrad',


    'control_design' => 'Kontrolle aller Entwurfsphasen',

    'structure_analysis' => 'Strukturanalyse des Podiumgestells',

    'large_models_calc_head' => 'Effektive Berechnung großer Modelle',
    'large_models_calc_desc' => 'Aufgrund der Möglichkeit, parallele Berechnungen in Softwareprodukten durchzuführen, erfolgt der gesamte Berechnungsprozess im Parallelbetrieb. Zusätzliche detaillierte Techniken, wie zyklische Symmetrieanalyse und Submodellierungstechniken, tragen ebenfalls zur effektiven Arbeit mit großen Modellen bei.',


    'analysis_scheme' => 'Schema der interdisziplinären Analyse',

    'choice_head' => 'Die Wahl liegt auf der Hand',
    'choice_desc1' => 'Die FE - Modellierung lässt die Anzahl der physischen Prototypen und Prüfen reduzieren. Dies beschleunigt die Rückzahlung von Investition durch die Verkürzung der Entwicklungszeit und trägt auch zur Erstellung des flexibleren informationsgestützten Entwicklungsprozesses bei und führt zur Schaffung der innovativen und qualitativ hochwertigen Produkte und Produktionsprozesse. Es führt zur schnelleren und kostengünstigeren Markteinführung von Produkten.',
    'choice_desc2' => 'Um wettbewerbsfähig zu bleiben, die Kundenanforderungen zu erfüllen, zuverlässige innovative Produkte zu entwickeln und gleichzeitig die Entwurfsphasen zu reduzieren, benötigen Entwickler und Ingenieure die Modellierungswerkzeuge, die zuverlässige und präzise integrierte Lösungen anbieten.',


];