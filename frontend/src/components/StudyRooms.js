import "./StudyRooms.css";
import React, { useContext } from "react";
import { MainContext } from "../contexts/MainContext";
import StudyRoom from "./StudyRoom";

export default function StudyRooms() {
	const { visibleStudyRooms } = useContext(MainContext);

	return (
		<div className="StudyRooms">
			{visibleStudyRooms.length > 0 ? (
				visibleStudyRooms.map((studyRoom) => (
					<StudyRoom key={studyRoom.id} studyRoom={studyRoom} />
				))
			) : (
				<p>Nincs ilyen típusú szoba</p>
			)}
		</div>
	);
}
