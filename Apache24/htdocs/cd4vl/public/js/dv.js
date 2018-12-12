$(function () {
   $('[data-toggle="tooltip"]').tooltip()
})

function delay(t, data) {
   return new Promise(resolve => {
      setTimeout(resolve.bind(null, data), t);
   });
}
;

var actions = function xy(fn) {
   var index = -1;
   function next() {
      index++;
      if (index < locationsArray.length) {
         return fn(locationsArray[index], index).then(function () {
            return delay(10).then(next);
         });
      }
   }
   return Promise.resolve().then(next);
}
;

function importCSV() {
   // check if selected site
   if (!$("#site").val()) {
      alert("Selecione o Centro de Distribuição antes!!!");
      return;
   }
   if (!$("#file").val()) {
      alert("Selecione um aquivo .CSV com os campos necessários!!!");
      return;
   }
   if (!confirm('Confirma que deseja importar os endereços do arquivo informado?'))
      return;
   $("#importing").show();
   var formData = new FormData(document.querySelector("#formImportCSV"));

   $.ajax({
      type: 'POST',
      url: 'importCSV',
      data: formData,
      processData: false, // tell jQuery not to process the data
      contentType: false, // tell jQuery not to set contentType
      success: function (data) {
         $("#copying").hide();
         if (data > 0) {
            var e = {};
            e.target = {};
            e.target.value = $("#site").val();
            changedSite(e);
         }
         setTimeout(function () {
            if (data == 0)
               alert('Nada encontrado para copiar');
            else
               alert('Copia finalizada!!! Endereços copiados = ' + data);
         }, 100);


      },
      error: function (jqXHR, textStatus, errorThrown) {
         console.log(jqXHR, textStatus, errorThrown);
      }
   });

}
;

function add1(i) {
   var s = {field: 'slot', id: locationsArray[i]['id'], data: parseInt($("#slot-" + (i - 1)).val(), 10) + 1};
   changedDataAjax(s);
   $("#slot-" + (i)).val(parseInt($("#slot-" + (i - 1)).val(), 10) + 1);
//   console.log("#slot-" + (i), "#slot-" + (i - 1), $("#slot-" + (i - 1)).val(), parseInt($("#slot-" + (i - 1)).val(), 10) + 1);
}
;

function add2(i) {
   var s = {field: 'slot', id: locationsArray[i]['id'], data: parseInt($("#slot-" + (i - 1)).val(), 10) + 2};
   changedDataAjax(s);
//   $("#slot-" + (i)).val(parseInt($("#slot-" + (i - 1)).val(), 10) + 2);
   console.log("#slot-" + (i), "#slot-" + (i - 1), $("#slot-" + (i - 1)).val(), parseInt($("#slot-" + (i - 1)).val(), 10) + 2);
}
;

function tabup(evt) {
   // move the focus on the colunm if tab or enter key pressed
   var e = (evt) ? evt : ((event) ? event : null);
   var s = e.target.id.match(/preaisle|aisle|postaisle|slot|/);
   if (!s || e.target.id === "slotList")
      return
   if (e.keyCode !== 13 && e.keyCode !== 9)
      return;
   var field = s[0];
   var idx = e.target.id.match(/[0-9]+/)[0];
   var nidx = parseInt(idx, 10) + 1;
   var nfield = field + '-' + nidx;
   $("#" + nfield).focus();
   evt.preventDefault();
}
;

function fillPostAisle() {
   // check if selected site
   if (!$("#fillPostAisleData").val()) {
      alert(alertMsg[1]);
      return;
   }
   console.log(alertMsg[2]);
   if (!confirm(alertMsg[2] + $("#fillPostAisleData").val() + '?'))
      return;


   var fn = function xx(subCatObj, index) { // sample async action
      return new Promise(function (resolve, reject) {
         var data = $("#fillPostAisleData").val() + ' ';
         var s = {field: 'postAisle', id: subCatObj['id'], data: data};
         $("#postaisle-" + index).val(data);
         resolve(changedDataAjax(s));
      });
   };
   actions(fn);
}
;

function emptyPostAisle() {
   // check if selected site
   if (!confirm(alertMsg[3]))
      return;

   var fn = function xx(subCatObj, index) { // sample async action
      return new Promise(function (resolve, reject) {
         var data = '';
         var s = {field: 'postAisle', id: subCatObj['id'], data: data};
         $("#postaisle-" + index).val(data);
         resolve(changedDataAjax(s));
      });
   };
   actions(fn);
}
;

function fillPreAisle() {
   // check if selected site
   if (!$("#fillPreAisleData").val()) {
      alert(alertMsg[1]);
      return;
   }
   if (!confirm(alertMsg[4] + $("#fillPreAisleData").val() + '?'))
      return;

   var fn = function xx(subCatObj, index) { // sample async action
      return new Promise(function (resolve, reject) {
         var data = $("#fillPreAisleData").val() + ' ';
         var s = {field: 'preAisle', id: subCatObj['id'], data: data};
         $("#preaisle-" + index).val(data);
         resolve(changedDataAjax(s));
      });
   };
   actions(fn);
}
;

function emptyPreAisle() {
   // check if selected site
   if (!confirm(alertMsg[5]))
      return;

   var fn = function xx(subCatObj, index) { // sample async action
      return new Promise(function (resolve, reject) {
         var data = '';
         var s = {field: 'preAisle', id: subCatObj['id'], data: data};
         $("#preaisle-" + index).val(data);
         resolve(changedDataAjax(s));
      });
   };
   actions(fn);
}
;

function fillSlot() {
   if (!confirm(alertMsg[6]))
      return;
   var start = prompt(alertMsg[7], 1);

   var fn = function xx(subCatObj, index) { // sample async action
      return new Promise(function (resolve, reject) {
         var s = {field: 'slot', id: subCatObj['id'], data: parseInt(start) + index};
         $("#slot-" + index).val(parseInt(start) + index);
         resolve(changedDataAjax(s));
      });
   };

   var results = actions(fn);

   results.then(() => {
//              var e = {};
//              e.target = {};
//              e.target.value = $("#aisle").val();
//              changedAisle(e);
   });
}
;

function copyFromVL() {
   // check if selected site
   if (!$("#site").val()) {
      alert(alertMsg[8]);
      return;
   }
   if (!confirm(alertMsg[9]))
      return;
   $("#copying").show();
   $.ajax({
      type: 'GET',
      url: 'copyFromVL',
      data: {siteId: $("#site").val()},
      success: function (data) {
         $("#copying").hide();
         if (data > 0) {
            var e = {};
            e.target = {};
            e.target.value = $("#site").val();
            changedSite(e);
         }
         setTimeout(function () {
            if (data == 0)
               alert(alertMsg[10]);
            else
               alert(alertMsg[11] + data);
         }, 100);


      },
      error: function (jqXHR, textStatus, errorThrown) {
         console.log(jqXHR, textStatus, errorThrown);
      }
   });

}
;

function copyFromVLFix() {
   // check if selected site
   if (!$("#flatfile").val()) {
      alert(alertMsg[15]);
      return;
   }
   if (!confirm(alertMsg[14]))
      return;
   $("#copying").show();

   var formData = new FormData(document.getElementById("flatfileForm"));
   formData.append("siteid", $("#site").val());
   $.ajax({
      type: 'POST',
      url: 'copyFromVLFix',
      data: formData,
      processData: false, // tell jQuery not to process the data
      contentType: false, // tell jQuery not to set contentType
      success: function (resp) {
         var data = JSON.parse(resp);
         var read = data.read;
         var nnew = data.new;
         $("#copying").hide();
         if (nnew > 0) {
            var e = {};
            e.target = {};
            e.target.value = $("#site").val();
            changedSite(e);
         }
         setTimeout(function () {
            if (nnew == 0)
               alert(alertMsg[10]);
            else
               alert(alertMsg[16] + nnew + '/' + read);
         }, 100);

      },
      error: function (jqXHR, textStatus, errorThrown) {
         console.log(jqXHR, textStatus, errorThrown);
      }
   });


}
;

function copyFromVLCSV() {
   // check if selected site
   if (!$("#csvfile").val()) {
      alert(alertMsg[15]);
      return;
   }
   if (!confirm(alertMsg[17]))
      return;
   $("#copying").show();

   var formData = new FormData(document.getElementById("csvfileForm"));
   formData.append("siteid", $("#site").val());
   $.ajax({
      type: 'POST',
      url: 'copyFromVLCSV',
      data: formData,
      processData: false, // tell jQuery not to process the data
      contentType: false, // tell jQuery not to set contentType
      success: function (resp) {
         var data = JSON.parse(resp);
         var read = data.read;
         var nnew = data.new;
         $("#copying").hide();
         if (nnew > 0) {
            var e = {};
            e.target = {};
            e.target.value = $("#site").val();
            changedSite(e);
         }
         setTimeout(function () {
            if (nnew == 0)
               alert(alertMsg[10]);
            else
               alert(alertMsg[16] + nnew + '/' + read);
         }, 100);

      },
      error: function (jqXHR, textStatus, errorThrown) {
         console.log(jqXHR, textStatus, errorThrown);
      }
   });


}
;

function copyFromAisle() {
   // check if selected site
   if (!$("#fromAisle").val()) {
      alert(alertMsg[12]);
      return;
   }
   if (!confirm(alertMsg[13] + $("#fromAisle").val() + ' ?'))
      return;
   $("#copyingFromAisle").show();

   $.get('getLocs?siteId=' + $("#site").val() + '&aisle=' + $("#fromAisle").val(), function (data) {
      if (data.length === 0)
         return;


      var fn = function xx(subCatObj, i) { // sample async action
         return new Promise(function (resolve, reject) {
            if ($("#preaisle-" + i).length) {
               $("#preaisle-" + i).val(subCatObj.preAisle);
//               $("#aisle-" + i).val(subCatObj.aisle);
               $("#postaisle-" + i).val(subCatObj.postAisle);
               $("#slot-" + i).val(subCatObj.slot);
               console.log(i)
               var fields = {};
               fields['preaisle'] = subCatObj.preAisle;
//               fields['aisle'] = subCatObj.aisle;
               fields['postaisle'] = subCatObj.postAisle;
               fields['slot'] = subCatObj.slot;
               var data = {id: $("#id-" + i).val(), fields: fields};
               resolve(changedLocationAjax(data));
            }
         });
      };


      var actions = function xy(fn) {
         var index = -1;
         function next() {
            index++;
            if (index < data.length) {
               return fn(data[index], index).then(function () {
                  return delay(10).then(next);
               });
            }
         }
         return Promise.resolve().then(next);
      }
      ;

      var results = actions(fn);

      results.then(() => {
         $("#copyingFromAisle").hide();
      });

//      var i = 0;
//      $.each(data, function (index, subCatObj) {
//         if ($("#preaisle-" + i).length) {
//            $("#preaisle-" + i).val(subCatObj.preAisle);
//            $("#aisle-" + i).val(subCatObj.aisle);
//            $("#postaisle-" + i).val(subCatObj.postAisle);
//            $("#slot-" + i).val(subCatObj.slot);
//            var fields = {};
//            fields['preaisle'] = subCatObj.preAisle;
//            fields['aisle'] = subCatObj.aisle;
//            fields['postaisle'] = subCatObj.postAisle;
//            fields['slot'] = subCatObj.slot;
//            var data = {id: $("#id-" + i).val(), fields: fields};
//            changedLocationAjax(data);
//            i++;
//         }
//      });
//      $("#copyingFromAisle").hide();

   });

}
;

function emptyDynamicLocs() {
   // has to kill the on change created before
   var found = true;
   var i = 0;
   while (found) {
      if ($("#preaisle-" + i).length) {
         $(document).off('change', "#preaisle-" + i, changedData);
         $(document).off('change', "#aisle-" + i, changedData);
         $(document).off('change', "#postaisle-" + i, changedData);
         $(document).off('change', "#slot-" + i, changedData);
         i++;
      } else
         found = false;
   }
   $('#dynamicLocs').empty();


}
;

function changedSite(e) {
   console.log(e.target.value);
   if (!e.target.value) {
      hide("#filterInput");
      hide("#updateButton");
      hide("#printDiv");
      hide("#genDVDiv");
      hide("#listButton");
      hide("#copyButtonDiv");
      return;
   }
   var siteId = e.target.value;
   hide("#filterInput");
   $.get('getAisles?siteId=' + siteId, function (data) {
      $('#aisle').empty();
      emptyDynamicLocs();
      if (data.length > 0)
         $('#aisle').append("<option value=''></option>");
      $.each(data, function (index, subCatObj) {
         $('#aisle').append("<option value='" + subCatObj.aisle + "'>" + subCatObj.aisle + "</option>");
      });

      if (data.length > 0) {
         show("#filterInput");
         show("#updateButton");
         show("#printDiv");
         show("#genDVDiv");
         show("#listButton");
         show("#copyButtonDiv");
      }
   });
}
;

function showLocs(data) {
   show("#LocationSections");
   locationsArray = data;
//      console.log('locationsArray=', locationsArray)
   var i = 0;
   $.each(data, function (index, subCatObj) {
      var newLoc = '<div class="row text-center locationRow">';
//         newLoc += '<div class="col">';
//         newLoc += '<input id="cbloc' + i + '" type="checkbox" >';
//         newLoc += '</div>';

      newLoc += '<div class="col">';
      newLoc += '<label>' + subCatObj.locid + '</label>';
      newLoc += '<input hidden id="id-' + i + '" value="' + subCatObj.id + '">';
      newLoc += '</div>';

      newLoc += '<div id="preaisleL' + i + '" class="col">';
      newLoc += '<input id="preaisle-' + i + '"  value="' + (subCatObj.preAisle ? subCatObj.preAisle : '') + '">';
      newLoc += '</div>';

      newLoc += '<div class="col">';
      newLoc += '<input id="aisle-' + i + '"  value="' + (subCatObj.aisle ? subCatObj.aisle : '') + '">';
      newLoc += '</div>';

      newLoc += '<div id="postaisleL' + i + '" class="col">';
      newLoc += '<input id="postaisle-' + i + '"  value="' + (subCatObj.postAisle ? subCatObj.postAisle : '') + '">';
      newLoc += '</div>';

      newLoc += '<div class="col">';
      newLoc += '<input id="slot-' + i + '"  value="' + (subCatObj.slot ? subCatObj.slot : '') + '" style="text-transform:uppercase">';
      newLoc += '</div>';

      newLoc += '<div class="col-1 p-0">';
      if (i !== 0) {
         newLoc += '<button class="addSlot myButton addButton" type="button" onclick="add1(' + i + ')">+1</button>';
         newLoc += '<button class="addSlot myButton addButton" type="button" onclick="add2(' + i + ')">+2</button>';
      }
      newLoc += '</div>';

//         newLoc += '<div class="col-3">';
//         newLoc += '<label class="dvLabel">' + (subCatObj.dv1 ? subCatObj.dv1 : '') + '</label>';
//         newLoc += '<label class="dvLabel">' + (subCatObj.dv2 ? subCatObj.dv2 : '') + '</label>';
//         newLoc += '<label class="dvLabel">' + (subCatObj.dv3 ? subCatObj.dv3 : '') + '</label>';
//         newLoc += '<label class="dvLabel">' + (subCatObj.dv4 ? subCatObj.dv4 : '') + '</label>';
//         newLoc += '<label class="dvLabel">' + (subCatObj.dv5 ? subCatObj.dv5 : '') + '</label>';
//
//         newLoc += '</div>';

      // create onchange function

      $(document).on('change', "#preaisle-" + i, changedData);
      $(document).on('change', "#aisle-" + i, changedData);
      $(document).on('change', "#postaisle-" + i, changedData);
      $(document).on('change', "#slot-" + i, changedData);

      $('#dynamicLocs').append(newLoc);
      i++;
   });

   show("#filterInput");
   $('#fromAisle').html($('#aisle').html());
   show("#copyFromAisleDiv");

}
;

function showLocsDv(data) {
   show("#LocationSections");
   locationsArray = data;
   var i = 0;
   $.each(data, function (index, subCatObj) {
      var newLoc = '<div class="row text-center locationRow">';
      newLoc += '<div class="col-1">';
      newLoc += '<input id="cbloc' + i + '" type="checkbox" >';
      newLoc += '</div>';

      newLoc += '<div class="col">';
      newLoc += '<label>' + subCatObj.locid + '</label>';
      newLoc += '<input hidden id="id-' + i + '" value="' + subCatObj.id + '">';
      newLoc += '</div>';

      newLoc += '<div id="preaisleL' + i + '" class="col">';
      newLoc += '<label>' + (subCatObj.preAisle ? subCatObj.preAisle : '') + '</label>';
      ;
      newLoc += '</div>';

      newLoc += '<div class="col">';
      newLoc += '<label>' + (subCatObj.aisle ? subCatObj.aisle : '') + '</label>';
      ;
      newLoc += '</div>';

      newLoc += '<div id="postaisleL' + i + '" class="col">';
      newLoc += '<label>' + (subCatObj.postAisle ? subCatObj.postAisle : '') + '</label>';
      ;
      newLoc += '</div>';

      newLoc += '<div class="col">';
      newLoc += '<label>' + (subCatObj.slot ? subCatObj.slot : '') + '</label>';
      ;
      newLoc += '</div>';

      newLoc += '<div class="col-3">';
      newLoc += '<label class="dvLabel">' + (subCatObj.dv1 ? subCatObj.dv1 : '') + '</label>';
      newLoc += '<label class="dvLabel">' + (subCatObj.dv2 ? subCatObj.dv2 : '') + '</label>';
      newLoc += '<label class="dvLabel">' + (subCatObj.dv3 ? subCatObj.dv3 : '') + '</label>';
      newLoc += '<label class="dvLabel">' + (subCatObj.dv4 ? subCatObj.dv4 : '') + '</label>';
      newLoc += '<label class="dvLabel">' + (subCatObj.dv5 ? subCatObj.dv5 : '') + '</label>';

      newLoc += '</div>';

      // create onchange function

      $(document).on('change', "#preaisle-" + i, changedData);
      $(document).on('change', "#aisle-" + i, changedData);
      $(document).on('change', "#postaisle-" + i, changedData);
      $(document).on('change', "#slot-" + i, changedData);

      $('#dynamicLocs').append(newLoc);
      i++;
   });

   show("#filterAisles");
   $("#listing").hide();

}
;

function changedAisle(e) {
   var aisle = e.target.value;
   emptyDynamicLocs();
   $.get('getLocs?siteId=' + $("#site").val() + '&aisle=' + aisle, function (data) {
      if (data.length === 0)
         return;
      showLocs(data);
   });
}
;

function changedAisleDV(e) {
   var aisle = e.target.value;
   emptyDynamicLocs();
   $.get('getLocs?siteId=' + $("#site").val() + '&aisle=' + aisle, function (data) {
      if (data.length === 0)
         return;
      locsFrom = 'aisle';
      showLocsDv(data);
   });
}
;

function changedData(e) {
   console.log(e);
   var newdata = e.target.value.toString();
   var field = e.target.id.match(/preaisle|aisle|postaisle|slot/)[0];
   var idx = e.target.id.match(/[0-9]+/)[0];
   console.log(newdata, e.target.id, field, idx, locationsArray[idx]);
   // uppercase slot and aisle
   if (field === "slot" || field === "aisle")
      newdata = newdata.toUpperCase();
   var data = {field: field, id: locationsArray[idx]['id'], data: newdata};
   changedDataAjax(data);
}
;

function changedDataAjax(data) {
   return new Promise(function (resolve, reject) {
      $.ajax({
         type: 'GET',
         url: 'updateData',
         data: data,
         success: function (data) {
            resolve();
         },
         error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR, textStatus, errorThrown);
            resolve();
         }
      });
   });
}
;

function changedLocationAjax(data) {
   return new Promise(function (resolve, reject) {
      $.ajax({
         type: 'GET',
         url: 'updateLocation',
         data: data,
         success: function (data) {
            resolve();
         },
         error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR, textStatus, errorThrown);
            resolve();
         }
      });
   });
}
;

function hide(e) {
   $(e).removeClass('visible');
   $(e).addClass('invisible');
}
;

function show(e) {
   $(e).removeClass('invisible');
   $(e).addClass('visible');
}
;

function clickLocCB(cb) {
   var checkboxes = $(':checkbox');
   for (i = 0; i < checkboxes.length; i++) {
      if ($(checkboxes[i]).attr('id') !== "cbloc")
         $(checkboxes[i]).click();
   }
}
;

function checkCB() {
   var checked = false;
   var checkboxes = $(':checkbox');
   var ids = [];
   for (i = 0; i < checkboxes.length; i++) {
      if ($(checkboxes[i]).attr('id') !== "cbloc")
         if ($(checkboxes[i]).prop('checked')) {
            checked = true;
            var s = $(checkboxes[i]).attr('id').match(/[0-9]+/);
            ids.push($('#id-' + s).val());
         }
   }
   return {checked: checked, ids: ids};
}
;

function generateDV() {
   var check = checkCB();
   var ids = check.ids;
   var checked = check.checked;
   if (!checked) {
      alert(alertMsg[1]);
      return;
   }
   if (!confirm(alertMsg[2]))
      return;
   var numdigits = prompt(alertMsg[3], numDigitsDefault);

   if (numdigits == null || numdigits == "") {
      return;
   }
   if (numdigits > 5 || numdigits < 2) {
      alert(alertMsg[4]);
      return;
   }
   numDigitsDefault = numdigits;

   $("#generating").show();
   $.ajax({
      type: 'GET',
      url: 'generateDV',
      data: {ids: ids, numdigits: numdigits},
      success: function (data) {
         var e = {};
         e.target = {};
         e.target.value = $("#aisle").val();
         if (locsFrom === 'aisle')
            changedAisleDV(e);
         else
            loadTextLocs(e);
         $("#generating").hide();
         $('#cbloc').prop('checked', false);
      },
      error: function (jqXHR, textStatus, errorThrown) {
         $("#generating").hide();
         console.log(jqXHR, textStatus, errorThrown);
      }
   });

}
;

function generateDVAllLocs() {
   if (!confirm(alertMsg[16]))
      return;
   if (!confirm(alertMsg[17]))
      return;
   var numdigits = prompt(alertMsg[3], numDigitsDefault);

   if (numdigits == null || numdigits == "") {
      return;
   }
   if (numdigits > 5 || numdigits < 2) {
      alert(alertMsg[4]);
      return;
   }
   numDigitsDefault = numdigits;

   $("#generatingAll").show();
   $.ajax({
      type: 'GET',
      url: 'generateDVAllLocs',
      data: {numdigits: numdigits},
      success: function (data) {
         $("#generatingAll").hide();
      },
      error: function (jqXHR, textStatus, errorThrown) {
         $("#generatingAll").hide();
         console.log(jqXHR, textStatus, errorThrown);
      }
   });

}
;

function loadTextLocs(e) {
   if (!$("#slotList").val()) {
      alert(alertMsg[5]);
      return;
   }
   var lines = $('#slotList').val().split('\n');
   var index = lines.indexOf("");
   if (index !== -1)
      lines.splice(index, 1);
   emptyDynamicLocs();
   $("#listing").show();

   $.get('getLocs?siteId=' + $("#site").val() + '&list=' + JSON.stringify(lines), function (data) {
      if (data.length === 0)
         return;
      locsFrom = 'list';
      showLocsDv(data);
   });
}
;

function updateDVVLSel(dv) {
   if (!confirm(alertMsg[6]))
      return;

   $("#updating").show();

   $.ajax({
      type: 'GET',
      url: 'updateVL',
      data: {dv: dv, siteId: $("#site").val()},
      success: function (data) {
         $("#updating").hide();
         alert(alertMsg[7])
      },
      error: function (jqXHR, textStatus, errorThrown) {
         $("#generating").hide();
         console.log(jqXHR, textStatus, errorThrown);
         $("#updating").hide();
      }
   });

}
;

function exportCDFix(dv) {
   if (!confirm(alertMsg[12]))
      return;

   $("#updating").show();

   $.ajax({
      type: 'GET',
      url: 'exportCDFix',
      data: {dv: dv, siteId: $("#site").val()},
      success: function (data) {
         $("#updating").hide();
         alert(alertMsg[7])
      },
      error: function (jqXHR, textStatus, errorThrown) {
         $("#generating").hide();
         console.log(jqXHR, textStatus, errorThrown);
         $("#updating").hide();
      }
   });

}
;

function exportCDTable(dv) {
   if (!confirm(alertMsg[13]))
      return;

   $("#updating").show();
   $.ajax({
      type: 'GET',
      url: 'exportCDTable',
      data: {dv: dv, siteId: $("#site").val(), siteName: $("#site>option:selected").html()},
      success: function (data) {
         $("#updating").hide();
         alert(alertMsg[7])
      },
      error: function (jqXHR, textStatus, errorThrown) {
         $("#generating").hide();
         console.log(jqXHR, textStatus, errorThrown);
         $("#updating").hide();
      }
   });

}
;

function exportCDRest(dv) {
   if (!confirm(alertMsg[14]))
      return;

   $("#updating").show();
   $.ajax({
      type: 'GET',
      url: 'exportCDRest',
      data: {dv: dv, siteId: $("#site").val(), siteName: $("#site>option:selected").html()},
      success: function (data) {
         var resp = JSON.parse(data);
         $("#updating").hide();
         if (resp.code == 200)
            alert(alertMsg[7])
         else
            alert(alertMsg[15]+resp.code)
      },
      error: function (jqXHR, textStatus, errorThrown) {
         $("#generating").hide();
         console.log(jqXHR, textStatus, errorThrown);
         $("#updating").hide();
      }
   });

}
;

function printDVSel() {
   var check = checkCB();
   var ids = check.ids;
   var checked = check.checked;
   if (!checked) {
      alert(alertMsg[1]);
      return;
   }
   if (!confirm(alertMsg[8]))
      return;

   var printer;

   if (localStorage.getItem("printer") === null)
      printer = "192.168.1.100:9100";
   else
      printer = localStorage.printer;

   printer = prompt(alertMsg[9], printer);
   if (!printer)
      return;
   localStorage.printer = printer;

   $("#printing").show();
   console.log('ids', ids);
   $.ajax({
      type: 'GET',
      url: 'printDVSel',
      data: {ids: ids, printer: printer},
      success: function (resp) {
         var data = JSON.parse(resp);
         if (data.error !== 0)
            alert(data.desc);
         else
            alert(alertMsg[10]);
         $("#printing").hide();
      },
      error: function (jqXHR, textStatus, errorThrown) {
         $("#printing").hide();
         console.log(jqXHR, textStatus, errorThrown);
      }
   });
}
;

function printDVToday() {
   if (!confirm(alertMsg[11]))
      return;

   var printer;

   if (localStorage.getItem("printer") === null)
      printer = "192.168.1.100:9100";
   else
      printer = localStorage.printer;

   printer = prompt(alertMsg[9], printer);
   if (!printer)
      return;
   localStorage.printer = printer;

   $("#printing").show();
   $.ajax({
      type: 'GET',
      url: 'printDVToday',
      data: {printer: printer, siteId: $("#site").val()},
      success: function () {

         alert(alertMsg[10]);
         $("#printing").hide();
      },
      error: function (jqXHR, textStatus, errorThrown) {
         $("#printing").hide();
         console.log(jqXHR, textStatus, errorThrown);
      }
   });
}
;

function saveConf() {
//   $("#configuring").empty();
   $("#configuring").html(alertMsg[1]);
   $("#configuring").show();

   $.ajax({
      type: 'GET',
      url: 'saveConf',
      data: {host: $("#host").val(), port: $("#port").val(), db: $("#db").val(), user: $("#user").val(), pass: $("#pass").val(), url: $("#url").val(), clientid: $("#clientid").val(), clientsecret: $("#clientsecret").val()},
      success: function (dataJ) {
         var data = JSON.parse(dataJ);
         if (data.error !== 0) {
            $("#configuring").html(data.desc);
         } else {
            alert(alertMsg[2]);
            $("#configuring").hide();
         }
      },
      error: function (jqXHR, textStatus, errorThrown) {
         console.log(jqXHR, textStatus, errorThrown);
      }
   });
}
;

