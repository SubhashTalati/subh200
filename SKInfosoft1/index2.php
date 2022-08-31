<!doctype html>
<html lang="en" dir="ltr">
<head>
   <title>Select to Input Example</title>
   <meta charset="utf-8" />
   <script>
      function returnName(elements,name) {
         var i=0;
         for(i;i<elements.length;i++) {
            if(elements[i].name==name) {
               break;
            }
         }
         return(i);
      }
      function selectToInput(selectName,inputName) {
         var selects=document.getElementsByTagName('select'),inputs=document.getElementsByTagName('input'),s=returnName(selects,selectName),i=returnName(inputs,inputName),value=selects[s].value;
         if(value) {
            inputs[i].value=value;
         }
         else {
            inputs[i].value='';
         }
      }
   </script>
</head>
<body>
   <p>
      Choose One:<br />
      <select name="select" onchange="selectToInput('select','text_input');">
         <option value="">...</option>
         <option value="First">First</option>
         <option value="Second">Second</option>
         <option value="Third">Third</option>
      </select>
   </p>
   <p>
      <input type="text" size="25" value="" name="text_input" />
      <input type="submit" value="submit" />
   </p>
</body>
</html>
Read more at http://www.htmlcodetutorial.com/comments/viewtopic.php?f=36&t=21157#I8H0Pf5uURTfobvq.99