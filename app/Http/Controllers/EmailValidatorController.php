<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
/**
 * @OA\Info(title="Prueba Carestino", version="0.1")
 */
class EmailValidatorController extends Controller
{
  /**
 * @OA\Get(
 *     path="/validarEmail",
 *     summary="Verifica si un email es valido",
  *     tags={"email"},
 *     operationId="emailValidator",
 *     @OA\Parameter(
 *         name="Email",
 *         in="path",
 *         required=true,
 *    @OA\Schema(
 *         type="string",
 *         @OA\Items(type="string"),
 *    ),
 *),
 *     @OA\Response(
 *         response="default",
 *         description="Todo ok"
 *     )
 * )
 */
  public function emailValidator(Request $request){
    if (!$request->email){
        return array('resultado' => false);
    }
    return array('resultado' => false !== filter_var($request->email, FILTER_VALIDATE_EMAIL));
  }
}
