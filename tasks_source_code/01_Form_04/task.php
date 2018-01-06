﻿<?php
include("../../task_core.php");
$cls_Task = new cls_Task();
//-------------------------------------------------->
$cls_Task->s_title = "Form_04";
$cls_Task->s_id = "01_Form_04"; //_exact_ folder name!
$cls_Task->s_description = "Розміщення вікна програми по центру екрану";

$cls_Task->_add_step("1. Відкрити створене рішення <b>Lesson_01</b>.");
$cls_Task->_add_step("2. Додати у рішення новий проект <b>Form_04</b>.");
$cls_Task->_add_step("3. Створити форму відповідно специфікації.");
$cls_Task->_add_step("4. Завантажити програму у <b>DEV-VALIDATOR</b>.");
$cls_Task->_add_step("5. Добитися повної валідації програми.");
$cls_Task->_add_step("6. Зберегти скріншот <b>[Alt+PrintScreen]</b> результатів у папку <b>Production</b>.");
$cls_Task->_add_step("7. Скопіювати програму у папку <b>Production</b>.");
$cls_Task->_add_step("8. Зберегти проект та закрити рішення.");

$cls_Task->_add_step("<hr>");
$cls_Task->_add_step("Для коректної валідації програми встановіть властивості <b>AutoScaleMode</b> значення <b>None</b>");


$cls_Task->_add_property("Application name", "Ім'я програми", "Form_04.exe");
$cls_Task->_add_property("Form.AutoScaleMode", "Режим перерахунку форми", "None");
$cls_Task->_add_property("Form.Text", "Текст Форми", "CenterScreen - Розміщення вікна програми по центру екрану");
$cls_Task->_add_property("Form.BackColor.Name", "Колір Форми", "InactiveCaption");
$cls_Task->_add_property("Form.Width", "Довжина Форми (в пікселях)", "600");
$cls_Task->_add_property("Form.Height", "Висота Форми (в пікселях)", "400");
$cls_Task->_add_property("Form.StartPosition", "Початкова позиція", "CenterScreen");

$cls_Task->s_learn_url = "https://learn.ztu.edu.ua/mod/lesson/view.php?id=9977&pageid=8";
$cls_Task->s_youtube_url = "";
$cls_Task->s_discuss_url = "https://www.facebook.com/groups/1487277621317029/";
//-------------------------------------------------->
//run:
include("../../t_task.php");
?>