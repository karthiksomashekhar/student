function isNumberKeyevent(evt) //onkeypress="return isNumberKeyevent(event)"
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}

//GLobal Scripts
function isNumberKey(evt)		// onkeypress="return isNumberKey(event)"
{
	  if ([e.keyCode||e.which]==9) //this is to allow backspace
		    return true;
	  
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
   return true;
}

function AllowAlphabet(e)		// onkeypress="return AllowAlphabet(event)"
{
	  if ([e.keyCode||e.which]==8) //this is to allow backspace
		    return true;
	  if ([e.keyCode||e.which]==9) //this is to allow backspace
		    return true;
	isIE=document.all? 1:0
	keyEntry = !isIE? e.which:event.keyCode;
	if(((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry=='46') || (keyEntry=='32') || keyEntry=='45' ) 
		return true;  
	else
		return false;
}

function IntegerAndDecimal(e,obj,isDecimal)		// onkeypress=' IntegerAndDecimal(event,this,true)'
{
	  if ([e.keyCode||e.which]==9) //this is to allow backspace
		    return true;
	  
    if ([e.keyCode||e.which]==8) //this is to allow backspace
    return true;

    if ([e.keyCode||e.which]==46) //this is to allow decimal point
    {
      if(isDecimal=='true')
      {
        var val = obj.value;
 
        if(val.indexOf(".") > -1)
        {
            e.returnValue = false;
            return false;
        }
        return true;
      }
      else
      {
        e.returnValue = false;
        return false;
      }
    }

    if ([e.keyCode||e.which] < 48 || [e.keyCode||e.which] > 57)
    e.preventDefault? e.preventDefault() : e.returnValue = false; 
}

function blockNonNumbers(obj, e, allowDecimal, allowNegative)  //onkeypress="return blockNonNumbers(this, event, true, true);" 
{
	var key;
	var isCtrl = false;
	var keychar;
	var reg;
		
	if(window.event) {
		key = e.keyCode;
		isCtrl = window.event.ctrlKey
	}
	else if(e.which) {
		key = e.which;
		isCtrl = e.ctrlKey;
	}
	
	if (isNaN(key)) return true;
	
	keychar = String.fromCharCode(key);
	
	// check for backspace or delete, or if Ctrl was pressed
	if (key == 8 || isCtrl)
	{
		return true;
	}

	reg = /\d/;
	var isFirstN = allowNegative ? keychar == '-' && obj.value.indexOf('-') == -1 : false;
	var isFirstD = allowDecimal ? keychar == '.' && obj.value.indexOf('.') == -1 : false;
	
	return isFirstN || isFirstD || reg.test(keychar);
}