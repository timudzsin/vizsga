import React, { createContext, useState, useEffect } from "react";
import axios from "axios";

export const MainContext = createContext();

export const MainProvider = ({ children }) => {
	// State-ek
	const [roomTypes, setRoomTypes] = useState([]);
	const [studyRooms, setStudyRooms] = useState([]);
	const [selectedRoomTypeId, setSelectedRoomTypeId] = useState("all");

	// Termékek szűrése kategória alapján
	const visibleStudyRooms =
		selectedRoomTypeId === "all"
			? studyRooms
			: studyRooms.filter(
					(studyRoom) =>
						String(studyRoom.room_type_id) === selectedRoomTypeId,
				);

	// API hívások
	function fetchRoomTypes() {
		axios.get("http://localhost:8000/api/roomtypes").then((res) => {
			setRoomTypes(res.data);
		});
	}
	function fetchStudyRooms() {
		axios.get("http://localhost:8000/api/studyrooms").then((res) => {
			setStudyRooms(res.data);
		});
	}
	function updateStudyRoom(studyRoom) {
		const updatedstudyRoom = {
			room_type_id: studyRoom.room_type_id,
			room_name: studyRoom.room_name,
			floor: studyRoom.floor,
			total_space: studyRoom.total_space,
			occupied_space: Number(studyRoom.occupied_space) + 1,
		};

		axios
			.put(
				`http://localhost:8000/api/studyrooms/${studyRoom.id}`,
				updatedstudyRoom,
			)
			.then(() => {
				// Sikeres módosítás után újra lekérjük a tanulószobákat.
				fetchStudyRooms();
			});
	}

	// Adatok lekérése az alkalmazás indulásakor
	useEffect(() => {
		fetchRoomTypes();
		fetchStudyRooms();
	}, []);

	return (
		<MainContext.Provider
			value={{
				roomTypes,
				selectedRoomTypeId,
				setSelectedRoomTypeId,
                visibleStudyRooms,
                updateStudyRoom,
			}}
		>
			{children}
		</MainContext.Provider>
	);
};
