import "./StudyRoom.css";
import React, { useContext } from "react"; 
import { MainContext } from "../contexts/MainContext"; 
 
export default function StudyRoom({ studyRoom }) { 
    const { updateStudyRoom } = useContext(MainContext); 
 
    function handleUpdate() { 
        updateStudyRoom(studyRoom); 
    } 

    console.log(studyRoom);
 
    return ( 
        <div className="StudyRoom">
            <h2>{studyRoom.room_name}</h2>
            <p>{studyRoom.room_type.type_name}</p>
            <div className="StudyRoom-line"></div>
            <p>ID: {studyRoom.id}</p>
            <div className="StudyRoom-line"></div>
            <p>Szobatípus: {studyRoom.room_type.type_name}</p>
            <div className="StudyRoom-line"></div>
            <p>Emelet: {studyRoom.floor}</p>
            <div className="StudyRoom-line"></div>
            <p>Férőhely: {studyRoom.total_space}</p>
            <div className="StudyRoom-line"></div>
            <p>Foglalt helyek: {studyRoom.occupied_space}</p>
            <div className="StudyRoom-line"></div>
            <p>Szabad helyek: {studyRoom.total_space - studyRoom.occupied_space}</p>
            <div className="StudyRoom-line"></div>
            <button type="button" onClick={handleUpdate}> 
                Helyet foglalok
            </button> 
        </div> 
    ); 
} 


