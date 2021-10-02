$(document).ready(function () {   
    var cards;
    // $.getJSON('content.json', function(data){
    //     $.each(data, function(key, val){
    //         cards.push(val);
    //     });        
    // });

    // console.log("cards should be here: " , cards);

    
    fetch('content.json')
      .then(response => {
          return response.json();
      })
      .then(results =>{
        console.log(results.content);        
        setCards(results.content);
    });

    $('#all').click(()=>{
      fetch('content.json')
      .then(response => {
          return response.json();
      })
      .then(results =>{
        console.log(results.content);        
        setCards(results.content);
      });
    });

    $('#games').click(()=>{
      fetch('content.json')
      .then(response => {
          return response.json();
      })
      .then(results =>{
        console.log(results.content);        
        setCards(results.content, 'games');
      });
    });

    $('#assorted').click(()=>{
      fetch('content.json')
      .then(response => {
          return response.json();
      })
      .then(results =>{
        console.log(results.content);        
        setCards(results.content, 'assorted');
      });
    });
 
    //  getData('content.json', (data) => setCards(data.content));      
    
 
});

function getData(url, cb){
    fetch(url)
      .then(response => response.json())
      .then(result => cb(result));
}

function clearCards(d){
  
  while(d.firstChild){
    if(d.firstChild == null || d == null){
      break;
    }
    d.removeChild(d.firstChild);
  }
}

function setCards(_data, cat=null){
  var _deck = document.getElementById('deck');
  clearCards(_deck);

  if(_data.length > 1){
    for(var i=0; i<_data.length; i++){
      if(cat != null){
        if(_data[i].category == cat){
         
          var _card = document.createElement('div');
          _card.className = 'card';  
          
          var _cardText = document.createElement('div');
          _cardText.className = 'card_text';
          _card.appendChild(_cardText);
          
          var _cardTitle = document.createElement('div');
          _cardTitle.className = 'card_title';
          _cardTitle.textContent = _data[i].card_title;
          _cardText.appendChild(_cardTitle);
        
          var _cardContent = document.createElement('div');
          _cardContent.className = 'card_content';
          _cardContent.textContent = _data[i].card_content;
          _deck.appendChild(_card);
          _cardText.appendChild(_cardContent);
          console.log("hooray you matched the category. Cat parameter was: ", cat);
          _card.id = _data[i].id;        
        }        
      }else{
        
        var _card = document.createElement('div');
        _card.className = 'card';  
        
        var _cardText = document.createElement('div');
        _cardText.className = 'card_text';
        _card.appendChild(_cardText);
        
        var _cardTitle = document.createElement('div');
        _cardTitle.className = 'card_title';
        _cardTitle.textContent = _data[i].card_title;
        _cardText.appendChild(_cardTitle);
      
        var _cardContent = document.createElement('div');
        _cardContent.className = 'card_content';
        _cardContent.textContent = _data[i].card_content;
        _deck.appendChild(_card);
        _cardText.appendChild(_cardContent);    
        _card.id = _data[i].id;        
      }
    }
    $('.card').click(function(){
      console.log("clicked ", this.id);
    });    
  }  
}

function readCard(){

}


