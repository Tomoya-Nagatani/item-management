import { useRef , useState} from "react";
import logo from './logo.svg';
import './App.css';
import ImageGrallery from './ImageGrallery';

function App() {
  const [fetchData, setFetchData] = useState([]); 
  const ref = useRef();

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log(ref.current.value);

    // APIURL
    const endpointURL = `https://pixabay.com/api/?key=36515849-1eba44f1ce10168bcc0838a27&q=${ref.current.value}&image_type=photo`;
    // APIを叩く（データフェッチング）
    fetch(endpointURL)
    .then((res) =>{
      return res.json();
    })
    .then((data) =>{
      console.log(data.hits);
      setFetchData(data.hits);
    });
  };


  return (
    <div className="container">
      <h2>My pixabay</h2>
      <form onSubmit={(e) => handleSubmit(e)}>
        <input type="text" placeholder="画像を探す" ref={ref} />
      </form>
      <ImageGrallery fetchData={fetchData}/>


    </div>
  );
}

export default App;
