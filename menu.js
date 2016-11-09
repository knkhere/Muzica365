var timeout = 300;
var closeTimer = 0;
var ddMenuItem = 0;

function mOpen(id)
 {
    var idd = ""+id;
    mCancelCloseTime();
    if(ddMenuItem)
        ddMenuItem.style.visibility='hidden';
    ddMenuItem=document.getElementById(idd);
    ddMenuItem.style.visibility='visible';
}


function mClose()
{
    if(ddMenuItem)
        ddMenuItem.style.visibility='hidden';
}

function mCloseTime()
{
    closeTimer = window.setTimeout(mClose,timeout);
}

function mCancelCloseTime()
{
    if(closeTimer)
    {
        window.clearTimeout(closeTimer);
        closeTimer=null;
    }
}
