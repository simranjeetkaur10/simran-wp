const game = {
  xTurn: true,
  xCurrentState: [],
  oCurrentState: [],
  winningStates: [
    // Rows
    ["0", "1", "2"],
    ["3", "4", "5"],
    ["6", "7", "8"],

    // Columns
    ["0", "3", "6"],
    ["1", "4", "7"],
    ["2", "5", "8"],

    // Diagonal
    ["0", "4", "8"],
    ["2", "4", "6"],
  ],
};

document.addEventListener("click", (event) => {
  const target = event.target;
  const isCell = target.classList.contains("wp-tic-tac-toe-grid-cell");
  const isDisabled = target.classList.contains("wp-tic-tac-toe-disabled");

  if (isCell && !isDisabled) {
    const cellValue = target.dataset.value;

    game.xTurn === true
      ? game.xCurrentState.push(cellValue)
      : game.oCurrentState.push(cellValue);

    target.classList.add("wp-tic-tac-toe-disabled");
    target.classList.add(game.xTurn ? "wp-tic-tac-toe-x" : "wp-tic-tac-toe-o");

    game.xTurn = !game.xTurn;

    // If all cells are disabled, then its draw
    if (
      !document.querySelectorAll(
        ".wp-tic-tac-toe-grid-cell:not(.wp-tic-tac-toe-disabled)"
      ).length
    ) {
      document
        .querySelector(".wp-tic-tac-toe-game-over")
        .classList.add("wp-tic-tac-toe-visible");
      document.querySelector(".wp-tic-tac-toe-game-over-text").textContent =
        "Draw!";
    }

    game.winningStates.forEach((winningState) => {
      const xWins = winningState.every((state) =>
        game.xCurrentState.includes(state)
      );
      const oWins = winningState.every((state) =>
        game.oCurrentState.includes(state)
      );

      if (xWins || oWins) {
        document
          .querySelectorAll(".wp-tic-tac-toe-grid-cell")
          .forEach((cell) => cell.classList.add("wp-tic-tac-toe-disabled"));
        document
          .querySelector(".wp-tic-tac-toe-game-over")
          .classList.add("wp-tic-tac-toe-visible");
        document.querySelector(".wp-tic-tac-toe-game-over-text").textContent =
          xWins ? "X wins!" : "O wins!";
      }
    });
  }
});
window.onload = resetGame;
function resetGame() {
  document
    .querySelector(".wp-tic-tac-toe-restart")
    .addEventListener("click", () => {
      document
        .querySelector(".wp-tic-tac-toe-game-over")
        .classList.remove("wp-tic-tac-toe-visible");
      document.querySelectorAll(".wp-tic-tac-toe-grid-cell").forEach((cell) => {
        cell.classList.remove(
          "wp-tic-tac-toe-disabled",
          "wp-tic-tac-toe-x",
          "wp-tic-tac-toe-o"
        );
      });

      game.xTurn = true;
      game.xCurrentState = [];
      game.oCurrentState = [];
    });
}
