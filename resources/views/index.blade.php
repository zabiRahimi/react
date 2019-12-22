<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link  href="/css/react1.css" rel="stylesheet" type="text/css" />

        <title>react</title>
        <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
        <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.3.1/react.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.3.1/reactdom.min.js"></script> --}}
        {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/react/16.12.0/cjs/react.production.min.js"></script> --}}
        <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

        {{-- <style media="screen">
           .h1R{
             color: #79c1c3;
           }
        </style> --}}
    </head>
    <body>
      @php
        $madar='man';
      @endphp
      <div id="app" class="demo"></div>

      <script type="text/babel">
class Header extends React.Component {
render() {
  return (


        <div className="header">

          <div className="menuIcon">
            <div className="dashTop"></div>
            <div className="dashBottom"></div>
            <div className="circle"></div>
          </div>

          <span className="title">{this.props.title}</span>

          <input
            type="text"
            className="searchInput"
            placeholder="Search ..." />

          <div className="fa fa-search searchIcon"></div>
        </div>
  )
}
}

class Content extends React.Component{
  render(){
    return(
      <div className="content">
        <div className="line"></div>
        <div className="item">

          <div className="avatar">
            <img
            alt='doug'
            src="http://www.croop.cl/UI/twitter/images/doug.jpg" />
          </div>

          <span className="time">
            An hour ago
          </span>
          <p>Ate lunch</p>
        </div>

        <div className="item">
          <div className="avatar">
            <img
              alt='doug' src="http://www.croop.cl/UI/twitter/images/doug.jpg" />
          </div>

          <span className="time">10 am</span>
          <p>Read Day two article</p>
        </div>

        <div className="item">
          <div className="avatar">
            <img
              alt='doug' src="http://www.croop.cl/UI/twitter/images/doug.jpg" />
          </div>

          <span className="time">10 am</span>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div className="item">
          <div className="avatar">
            <img
              alt='doug' src="http://www.croop.cl/UI/twitter/images/doug.jpg" />
          </div>

          <span className="time">2:21 pm</span>
          <p>Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

      </div>
    )
  }
}

class App extends React.Component{
        render(){
          {/*یک کامپوننت در ری اکت همانند یک عنصر اچ تی ام ال قابل استفاده است*/}

          return(

            <div className="notificationsFrame">
              <div className="panel">
                < Header title="poran" />
                < Content/>
              </div>
            </div>
          )
        }
      }
  			// var app = <h1 className='h1R'>Hello world</h1>
  			var mountComponent = document.querySelector('#app');
  			ReactDOM.render(<App/>, mountComponent);
  		</script>
    </body>
</html>
