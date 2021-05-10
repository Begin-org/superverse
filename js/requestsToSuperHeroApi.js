

function getCharactersByName(characterName) {
   
    const NO_RESULTS_FOR_THIS_SEARCH = 0
    const SUCCESSUFUL_SEARCH = 1
    const INVALID_NAME_IN_SEARCH = 2

    $.ajax({
        url:"controller/getCharactersByName.php",
        method:"get",
        dataType:"json", 
        data: {
            characterName: characterName
        },
        success: function (response){
            
            console.log(response.responseStatus)

            if (response.responseStatus === SUCCESSUFUL_SEARCH ) {
                
                console.log(response.result)

            } else if (response.responseStatus === NO_RESULTS_FOR_THIS_SEARCH){
                
            } else {    

            }
        },
        error: function (){

        }
    });
}

function getCharacterById(characterId){

    const NO_RESULTS_FOR_THIS_SEARCH = 0
    const SUCCESSUFUL_SEARCH = 1
    const INVALID_ID_IN_SEARCH = 2

    $.ajax({
        url:"controller/getCharacterById.php",
        method:"get",
        dataType:"json", 
        data: {
            characterId: characterId
        },
        success: function (response){
            
            console.log(response.responseStatus)

            if (response.responseStatus === SUCCESSUFUL_SEARCH ) {
                
                console.log(response.result)

            } else if (response.responseStatus === NO_RESULTS_FOR_THIS_SEARCH){
                
            } else {    

            }
        },
        error: function (){

        }
    });
}

function getRandomCharacter(){

    const ERROR_IN_SEARCH = 0
    const SUCCESSUFUL_SEARCH = 1

    $.ajax({
        url:"controller/getRandomCharacter.php",
        method:"get",
        dataType:"json", 
        success: function (response){
            
            console.log(response.responseStatus)

            if (response.responseStatus === SUCCESSUFUL_SEARCH ) {
                
                console.log(response.result)

            } else {

            }
        },
        error: function (){

        }
    });
}

function getListOfCharacters(listStart, listLimit) {

    const NO_RESULTS_FOR_THIS_SEARCH = 0
    const SUCCESSUFUL_SEARCH = 1
    const INVALID_PARAMETERS_IN_SEARCH = 2

    $.ajax({
        url:"controller/getListOfCharacters.php",
        method:"get",
        dataType:"json", 
        data: {
            listBegin: listStart,
            listLimit: listLimit
        },
        success: function (response){
            
            console.log(response.responseStatus)

            if (response.responseStatus === SUCCESSUFUL_SEARCH ) {
                
                console.log(response.result)

            } else if (response.responseStatus === NO_RESULTS_FOR_THIS_SEARCH){
                
            } else {    

            }
        },
        error: function (){

        }
    });
}

