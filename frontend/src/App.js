import "./App.css";
import React from "react";
import StudyRooms from "./components/StudyRooms";
import RoomTypeSelector from "./components/RoomTypeSelector";

function App() {
	return (
		<div className="App">
			<div className="App-headerBlock">
                <h1>TANULÓSZOBÁK NEKED</h1>
                <p>"Találd meg a számodra megfelelő tanulóhelyet!"</p>
            </div>
			<div className="App-roomTypeSelectorBlock">
                <p>Szobatípus: </p>
                <RoomTypeSelector></RoomTypeSelector>
            </div>
			<StudyRooms></StudyRooms>
		</div>
	);
}

export default App;
