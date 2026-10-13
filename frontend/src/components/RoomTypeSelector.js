import React, { useContext } from "react";
import { MainContext } from "../contexts/MainContext";

export default function RoomTypeSelector() {
	const { roomTypes, selectedRoomTypeId, setSelectedRoomTypeId } =
		useContext(MainContext);

	return (
		<div className="RoomTypeSelector">
			<select
				id="category"
				value={selectedRoomTypeId}
				onChange={(event) => {
					setSelectedRoomTypeId(event.target.value);
				}}
			>
				<option value="all">Összes típus</option>

				{roomTypes.map((roomType) => (
					<option key={roomType.id} value={roomType.id}>
						{roomType.type_name}
					</option>
				))}
			</select>
		</div>
	);
}
