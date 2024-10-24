const ERROR_STATUS = JSON.stringify({
    code : 500,
    msg: "Something went wrong!"
});

function GET({moduleName }) {

    
    return new Promise((resolve, reject) => {

        $.ajax({
            type: "GET",
            url: base_url + 'get' + moduleName ,
            dataType: "json",
            success: function (response) {
                if(response.code == 200){
                    resolve(JSON.parse(response.data));
                } else {
                    resolve(ERROR_STATUS);
                }
            },
            error: function (err) {
                reject(err);
            },
        });
    });
}
function POST({moduleName , fields, data}){
    
    if(fields){
        return $.ajax({
            type: "POST",
            url: base_url + 'getspecific' + moduleName ,
            data: fields,
            dataType: "json",
            success: function (response) {
                if(response){
                    return response
                }
                return ERROR_STATUS;
            },
            error: function (err) {
                console.log(err);
            },
        });
    }

    return $.ajax({
        type: "POST",
        url: base_url + 'insert' + moduleName ,
        data: data,
        dataType: "json",
        cache : false,
        processData: false,
        contentType: false,
        success: function (response) {
            if(response){
                return response
            }
            return ERROR_STATUS;
        },
        error: function (err) {
        console.log(err);
        },
    });

}

function PUT({moduleName , data}){
    return $.ajax({
        type: "POST",
        url: base_url + 'update' + moduleName ,
        data: data,
        dataType: "json",
        cache : false,
        processData: false,
        contentType: false,
        success: function (response) {
            if(response){
                return response
            }
            return ERROR_STATUS;
        },
        error: function (err) {
            console.log(err);
        },
    });
}

function DELETE({moduleName , data}){
    return $.ajax({
        type: "POST",
        url: base_url + 'delete' + moduleName ,
        data: data,
        dataType: "json",
        success: function (response) {
            if(response){
                return response
            }
            return ERROR_STATUS;
        },
        error: function (err) {
            console.log(err);
        },
    });
}