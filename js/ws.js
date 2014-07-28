function GetMember() {
    $.ajax({
        type: "GET",
        url: "http://localhost:3001/api/map_api/location_svc/ARTSCRUCORNER/get",
        data: "{'lat': '" + $("#txt_id").val() + "'}",
        contentType: "application/json; charset=utf-8",
        dataType: "json"
    });
}

  function GetItemsData() {
      try {
          url = "http://localhost:3001/api/map_api/location_svc/ARTSCRUCORNER/get",
          source = {
              datatype: "json",
              datafields: [
             { name: 'lat' },
             { name: 'lon' }]
             };

          $.ajax({
            cache: false,
            type: "GET",
            async: false,
            data: {},
            url: "http://localhost:3001/api/map_api/location_svc/ARTSCRUCORNER/get",
            contentType: "application/json; charset=utf-8",
            crossDomain: true,
            success: function(){},
            error: function(){}
          });
      }
      catch (e) {
          alert('failed to call web service. Error: ' + e);
      }
  }

  function SucceedFunc(data, status) {
      debugger;
      alert("Enter into Success");
      source.localdata = data.d;
      alert(source.localdata = data.d);

      //Preparing the data for use
      var dataAdapter = new $.jqx.dataAdapter(source);

      $("#jqxgrid").jqxGrid({
          source: dataAdapter,
          theme: 'classic',
          columns: [
         { text: 'Lat', dataField: 'lat', width: 250 },
         { text: 'Long', dataField: 'lon', width: 150 },
         { text: 'Item Price', dataField: 'ItemPrice', width: 180 },
         { text: 'Items On Hand', dataField: 'ItemOnHand', width: 180 }
         ]
      });
  }

  function FailedFunc(request, status, error) {
      debugger;
      alert("Error occured");
  }
