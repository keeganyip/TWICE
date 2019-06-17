var events = [
  {'Date': new Date(2019, 1, 1), 'Title': "Jihyo's Birthday!" ,'Link': 'Jihyo.html'},

  {'Date': new Date(2019, 2, 24), 'Title': "Mina's Birthday!" ,'Link': 'Mina.html'},

  {'Date': new Date(2019, 3, 23), 'Title': "Chaeyoung's Birthday!" ,'Link': 'Chaeyoung.html'},

  {'Date': new Date(2019, 4, 28), 'Title': "Dahyun's Birthday!" ,'Link': 'Dahyun.html'},

  {'Date': new Date(2019, 5, 11), 'Title': "'Happy Happy' & Breakthrough M/V Teaser Release" ,'Link': '#'},
  {'Date': new Date(2019, 5, 12), 'Title': "'Happy Happy' & Breakthrough M/V Release, Pocari Sweat Fansign",'Link': 'https://www.youtube.com/watch?v=ZdKYi5ekshM'},
  {'Date': new Date(2019, 5, 14), 'Title': "Tzuyu's Birthday!" ,'Link': 'Tzuyu.html'},
  {'Date': new Date(2019, 5, 15), 'Title': 'Twice World Tour TWICELIGHTS @ BANGKOK','Link': '#'},
  {'Date': new Date(2019, 5, 29), 'Title': 'Twice World Tour TWICELIGHTS @ MANILA','Link': '#'},

  {'Date': new Date(2019, 6, 13), 'Title': 'Twice World Tour TWICELIGHTS @ SINGAPORE','Link': '#'},
  {'Date': new Date(2019, 6, 17), 'Title': 'Twice World Tour TWICELIGHTS @ LOS ANGELES','Link': '#'},
  {'Date': new Date(2019, 6, 19), 'Title': 'Twice World Tour TWICELIGHTS @ MEXICO','Link': '#'},
  {'Date': new Date(2019, 6, 21), 'Title': 'Twice World Tour TWICELIGHTS @ NEWARK','Link': '#'},
  {'Date': new Date(2019, 6, 23), 'Title': 'Twice World Tour TWICELIGHTS @ CHICAGO','Link': '#'},

  {'Date': new Date(2019, 7, 17), 'Title': 'Twice World Tour TWICELIGHTS @ KUALA LUMPUR','Link': '#'},

  {'Date': new Date(2019, 8, 22), 'Title': "Nayeon's Birthday!" ,'Link': 'Nayeon.html'},

  {'Date': new Date(2019, 10, 1), 'Title': "Jeongyeon's Birthday!" ,'Link': 'Jeongyeon.html'},
  {'Date': new Date(2019, 10, 9), 'Title': "Momo's Birthday!" ,'Link': 'Momo.html'},

  {'Date': new Date(2019, 11, 29), 'Title': "Sana's Birthday!",'Link': 'Sana.html'}

];
var settings = {
    Color: '',
    LinkColor: '',
    NavShow: true,
    NavVertical: false,
    NavLocation: '',
    DateTimeShow: true,
    DateTimeFormat: 'mmm, yyyy',
    DatetimeLocation: '',
    EventClick: '',
    EventTargetWholeDay: true,
    DisabledDays: [],
};

var element = document.getElementById('caleandar');
caleandar(element, events, settings);
